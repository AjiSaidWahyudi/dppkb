<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Album;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        $album = Album::find($album_id);
        return view('admin.foto.create')->with('album_id', $album_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'detail' => 'required',
            'image' => 'image|max:1999',
        ]);
        $foto = new Foto;
        $foto->album_id = $request->album_id;
        $foto->judul = $request->judul;
        $foto->slug = str_slug($foto->judul);
        $foto->detail = $request->detail;
        $foto->ukuran = $request->file('image')->getClientSize();
        $foto->image = $request->image;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $foto->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('image')->storeAs('public/image'.$request->input('album_id'), $filename,'local');
            $foto->image = 'storage'.substr($path,strpos($path,'/'));
            $foto->save();
        }
        $foto->save();
        return redirect('/album/'.$request->input('album_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foto = Foto::find($id);
        return view('web.lihat_foto', compact('foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foto = Foto::find($id);
        return view('admin.foto.edit', compact('foto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'detail' => 'required',
            'image' => 'image|max:1999',
        ]);
        $foto = Foto::find($id);
        $foto->judul = $request->judul;
        $foto->slug = str_slug($foto->judul);
        $foto->detail = $request->detail;
        $foto->ukuran = $request->file('image')->getClientSize();
        $foto->image = $request->image;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $foto->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('image')->storeAs('public/image'.$request->input('album_id'), $filename,'local');
            $foto->image = 'storage'.substr($path,strpos($path,'/'));
            $foto->save();
        }
        $foto->save();
        return redirect('/album/'.$request->input('album_id'));
        //masih redirect ke album, belum bisa ke album/{id}nya album
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return redirect('/album');
    }
}
