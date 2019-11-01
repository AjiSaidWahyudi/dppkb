<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\Subkeg;
use App\Program;
use App\User;
use Mail;
use App\Mail\NotifKegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        $program = Program::all();
        $user = User::all();
        return view('admin.kegiatan.index', compact('kegiatan','program','user'));
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
        $kegiatan = new Kegiatan;
        $kegiatan->nama = $request->nama;
        $kegiatan->slug = str_slug($kegiatan->nama);
        $kegiatan->program_id = $request->program_id;
        $kegiatan->user_id = $request->user_id;
        $kegiatan->user2_id = $request->user2_id;
        $kegiatan->detail = $request->detail;
        $kegiatan->file = $request->file;
        $data = User::find($kegiatan->user_id)->toArray();
        //dd($data);
        Mail::send('email_kegiatan', ['data' => User::find($kegiatan->user_id), 'kegiatan' => $kegiatan], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Kegiatan Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        Mail::send('email_kegiatan2', ['data' => User::find($kegiatan->user2_id), 'kegiatan' => $kegiatan], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Kegiatan Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        $kegiatan->save();
        return redirect('/kegiatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $kegiatan = Kegiatan::whereSlug($slug)->firstOrFail();
        $subkeg = Subkeg::where('kegiatan_id',$kegiatan->id)->firstOrFail();
        return view('web.isi_kegiatan', compact('kegiatan','subkeg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        $program = Program::all();
        $user = User::all();
        return view('admin.kegiatan.edit', compact('kegiatan','program','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->nama = $request->nama;
        $kegiatan->slug = str_slug($kegiatan->nama);
        $kegiatan->program_id = $request->program_id;
        $kegiatan->user_id = $request->user_id;
        $kegiatan->user2_id = $request->user2_id;
        $kegiatan->detail = $request->detail;
        $kegiatan->status = $request->status;
        $kegiatan->file = $request->file;
        $data = User::find($kegiatan->user_id)->toArray();
        //dd($data);
        Mail::send('email_kegiatan_update', ['data' => User::find($kegiatan->user_id), 'kegiatan' => $kegiatan], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Kegiatan Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        Mail::send('email_kegiatan_update2', ['data' => User::find($kegiatan->user2_id), 'kegiatan' => $kegiatan], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Kegiatan Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        $kegiatan->save();
        return redirect('/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/kegiatan');
    }
}
