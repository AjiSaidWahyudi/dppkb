<?php

namespace App\Http\Controllers;

use App\Subkeg;
use App\Kegiatan;
use Illuminate\Http\Request;

class SubkegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkeg = Subkeg::all();
        $kegiatan = Kegiatan::all();
        return view('admin.subkeg.index', compact('kegiatan','subkeg'));
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
        $subkeg = new Subkeg;
        $subkeg->nama = $request->nama;
        $subkeg->kegiatan_id = $request->kegiatan_id;
        $subkeg->detail = $request->detail;
        $subkeg->file = $request->file;
        $subkeg->save();
        return redirect('/subkeg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function show(Subkeg $subkeg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkeg $subkeg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subkeg $subkeg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subkeg $subkeg)
    {
        //
    }
}
