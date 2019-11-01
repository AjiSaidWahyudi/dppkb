<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Tag;
use Auth;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        $tag = Tag::all();
        return view('admin.berita.index',compact('berita','tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita'=>'required',
            'foto_berita'=>'required',
            'isi_berita'=>'required',
        ]);
        $berita = new Berita;
        $berita->judul_berita = $request->judul_berita;
        $berita->slug = str_slug($berita->judul_berita);
        $berita->user_id = Auth::user()->id;
        $berita->isi_berita = $request->isi_berita;
        $berita->views = 0;
        if($request->hasFile('foto_berita')) {
            $file = $request->file('foto_berita');
            $filename = $berita->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('foto_berita')->storeAs('public/foto_berita', $filename,'local');
            $berita->foto_berita= 'storage'.substr($path,strpos($path,'/'));
            $berita->save();
        }
        $berita->save();
        $berita->tag()->sync($request->tag);
        return redirect('/berita')->with('Sukses','Berita Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $berita = Berita::whereSlug($slug)->firstOrFail();
        $ber = Berita::orderBy('views','desc')->paginate(4);
        $tag = Tag::all();
        $viewsCount = $berita->views+1;
        $berita->views = $viewsCount;
        $berita->save();
        $next_id = Berita::where('id', '>', $berita->id)->min('id');
        $prev_id = Berita::where('id', '<', $berita->id)->max('id');
        return view('web.isi_berita', compact("berita", 'ber', 'tag'))->with('next', Berita::find($next_id))->with('prev', Berita::find($prev_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::all();
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_berita'=>'required',
            'isi_berita'=>'required',
        ]);
        $berita = Berita::find($id);
        $berita->judul_berita = $request->judul_berita;
        $berita->slug = str_slug($berita->judul_berita);
        $berita->user_id = Auth::user()->id;
        $berita->isi_berita = $request->isi_berita;
        $berita->views = 0;
        if($request->hasFile('foto_berita')) {
            if($berita->foto_berita && file_exists(storage_path('app/public/' . $berita->judul_berita))){
                \Storage::delete('public/' . $berita->judul_berita);
            }
            $file = $request->file('foto_berita');
            $filename = $berita->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('foto_berita')->storeAs('public/foto_berita', $filename,'local');
            $berita->foto_berita= 'storage'.substr($path,strpos($path,'/'));
            $berita->save();
        }
        $berita->save();
        $berita->tag()->sync($request->tag);
        return redirect('/berita')->with('Sukses','Berita Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/berita')->with('Sukses','Berita Berhasil Dihapus');
    }

    public function arsip(Request $request)
    {
        $berita = Berita::orderBy('id','desc')->paginate(4);
        $tag = Tag::all();
        $keyword = $request->get('judul_berita');
        if ($keyword) {
            $berita = Berita::where("judul_berita", "LIKE", "%$keyword%")->paginate(10);
        }
        return view('web.arsip_berita', compact('berita','tag'));
    }
}
