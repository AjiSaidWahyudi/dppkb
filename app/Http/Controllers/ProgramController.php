<?php

namespace App\Http\Controllers;

use App\Program;
use App\Kegiatan;
use App\Unit;
use App\User;
use Mail;
use App\Mail\NotifProgram;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        $unit = Unit::all();
        $user = User::all();
        return view('admin.program.index', compact('unit','program','user'));
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
        $program = new Program;
        $program->nama = $request->nama;
        $program->slug = str_slug($program->nama);
        $program->unit_id = $request->unit_id;
        $program->user_id = $request->user_id;
        $program->detail = $request->detail;
        $program->file = $request->file;
        $data = User::find($program->user_id)->toArray();
        //dd($data);
        Mail::send('email_program', ['data' => User::find($program->user_id), 'program' => $program], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Program Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        $program->save();
        return redirect('/program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $program = Program::whereSlug($slug)->firstOrFail();
        $kegiatan = Kegiatan::where('program_id',$program->id)->firstOrFail();
        return view('web.isi_program', compact('program','kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        $unit = Unit::all();
        $user = User::all();
        return view('admin.program.edit', compact('unit','program','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $program = Program::find($id);
        $program->nama = $request->nama;
        $program->slug = str_slug($program->nama);
        $program->unit_id = $request->unit_id;
        $program->user_id = $request->user_id;
        $program->detail = $request->detail;
        $program->file = $request->file;
        $program->status = $request->status;
        $data = User::find($program->user_id)->toArray();
        //dd($data);
        Mail::send('email_program_update', ['data' => User::find($program->user_id), 'program' => $program], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Program Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        $program->save();
        return redirect('/program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect('/program');
    }
}
