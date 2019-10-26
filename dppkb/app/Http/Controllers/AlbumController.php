<?php

namespace App\Http\Controllers;

use App\Album;
use App\Foto;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::with('Foto')->get();
        return view('admin.album.index')->with('album', $album);
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
        $this->validate($request, [
            'judul' => 'required',
            'detail' => 'required',
            'cover' => 'image|max:1999',
        ]);
        $album = new Album;
        $album->judul = $request->judul;
        $album->slug = str_slug($album->judul);
        $album->detail = $request->detail;
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = $album->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('cover')->storeAs('public/cover', $filename,'local');
            $album->cover = 'storage'.substr($path,strpos($path,'/'));
            $album->save();
        }
        $album->save();
        return redirect('/album');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('Foto')->find($id);
        return view('admin.album.show')->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::with('Foto')->find($id);
        return view('admin.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'detail' => 'required',
            'cover' => 'image|max:1999',
        ]);
        $album = Album::with('Foto')->find($id);
        $album->judul = $request->judul;
        $album->slug = str_slug($album->judul);
        $album->detail = $request->detail;
        if($request->hasFile('cover')) {
            if($album->cover && file_exists(storage_path('app/public/' . $album->judul))){
                \Storage::delete('public/' . $album->judul);
            }
            $file = $request->file('cover');
            $filename = $album->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('cover')->storeAs('public/cover', $filename,'local');
            $album->cover = 'storage'.substr($path,strpos($path,'/'));
            $album->save();
        }
        $album->save();
        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::with('Foto')->find($id);
        $album->delete();
        return redirect('/album');
    }
}
