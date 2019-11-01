<?php

namespace App\Http\Controllers;

use App\Infografis;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infografis = Infografis::all();
        return view('admin.infografis.index', compact('infografis'));
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
        $infografis = new Infografis;
        $infografis->nama = $request->nama;
        $infografis->slug = str_slug($infografis->nama);
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $infografis->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('foto')->storeAs('public/infografis', $filename,'local');
            $infografis->foto = 'storage'.substr($path,strpos($path,'/'));
            $infografis->save();
        }
        $infografis->save();
        return redirect('/infografis')->with('Sukses','Infografis Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function show(Infografis $infografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infografis = Infografis::find($id);
        return view('admin.infografis.edit', compact('infografis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $infografis = Infografis::find($id);
        $infografis->nama = $request->nama;
        $infografis->slug = str_slug($infografis->nama);
        if($request->hasFile('foto')) {
            if($infografis->foto && file_exists(storage_path('app/public/' . $infografis->nama))){
                \Storage::delete('public/' . $infografis->nama);
            }
            $file = $request->file('foto');
            $filename = $infografis->slug.'.'.$file->getClientOriginalExtension();
            $path=$request->file('foto')->storeAs('public/infografis', $filename,'local');
            $infografis->foto = 'storage'.substr($path,strpos($path,'/'));
            $infografis->save();
        }
        $infografis->save();
        return redirect('/infografis')->with('Sukses','Infografis Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infografis = Infografis::find($id);
        $infografis->delete();
        return redirect('/infografis')->with('Sukses','Infografis Berhasil Dihapus');
    }
}
