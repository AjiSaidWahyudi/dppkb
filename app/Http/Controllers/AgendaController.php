<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('admin.agenda.index', compact('agenda'));
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
            'judul'=>'required',
            'tanggal_mulai'=>'required',
            'detail'=>'required',
        ]);
        $agenda = new Agenda;
        $agenda->judul = $request->judul;
        $agenda->slug = str_slug($agenda->judul);
        $agenda->tanggal_mulai = $request->tanggal_mulai;
        $agenda->tanggal_selesai = $request->tanggal_selesai;
        $agenda->jam = $request->jam;
        $agenda->detail = $request->detail;
        $agenda->save();
        return redirect('/agenda')->with('Sukses','Berita Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::find($id);
        return view('admin.agenda.edit',compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'tanggal_mulai'=>'required',
            'detail'=>'required',
        ]);
        $agenda = Agenda::find($id);
        $agenda->judul = $request->judul;
        $agenda->slug = str_slug($agenda->judul);
        $agenda->tanggal_mulai = $request->tanggal_mulai;
        $agenda->tanggal_selesai = $request->tanggal_selesai;
        $agenda->jam = $request->jam;
        $agenda->detail = $request->detail;
        $agenda->save();
        return redirect('/agenda')->with('Sukses','Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return redirect('/agenda')->with('Sukses','Berita Berhasil Dihapus');
    }
}
