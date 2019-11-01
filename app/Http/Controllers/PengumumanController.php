<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman.index', compact('pengumuman'));
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
        $pengumuman = new Pengumuman;
        $pengumuman->judul = $request->judul;
        $pengumuman->slug = str_slug($pengumuman->judul);
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $pengumuman->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('file')->storeAs('public/pengumuman', $filename,'local');
            $pengumuman->file = 'storage'.substr($path,strpos($path,'/'));
            $pengumuman->save();
        }
        $pengumuman->save();
        return redirect('/pengumuman')->with('Sukses','Pengumuman Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->judul = $request->judul;
        $pengumuman->slug = str_slug($pengumuman->judul);
        if($request->hasFile('file')) {
            if($pengumuman->foto && file_exists(storage_path('app/public/' . $pengumuman->nama))){
                \Storage::delete('public/' . $pengumuman->nama);
            }
            $file = $request->file('file');
            $filename = $pengumuman->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('file')->storeAs('public/pengumuman', $filename,'local');
            $pengumuman->file = 'storage'.substr($path,strpos($path,'/'));
            $pengumuman->save();
        }
        $pengumuman->save();
        return redirect('/pengumuman')->with('Sukses','Pengumuman Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/pengumuman')->with('Sukses','Pengumuman Berhasil Dihapus');
    }

    public function arsip()
    {
        $pengumuman = Pengumuman::orderBy('id','desc')->paginate(8);
        return view('web.arsip_pengumuman', compact('pengumuman'));
    }

    public function download($id)
    {
        $dl = Pengumuman::find($id);
        $pengumuman = public_path($dl->file);
        return Response()->download($pengumuman);
    }
}
