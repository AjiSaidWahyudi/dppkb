<?php

namespace App\Http\Controllers;

use App\Subkeg;
use App\Kegiatan;
use App\User;
use Mail;
use App\Mail\NotifSubkeg;
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
        $user = User::all();
        return view('admin.subkeg.index', compact('kegiatan','subkeg','user'));
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
        $subkeg->slug = str_slug($subkeg->nama);
        $subkeg->kegiatan_id = $request->kegiatan_id;
        $subkeg->user_id = $request->user_id;
        $subkeg->user2_id = $request->user2_id;
        $subkeg->user3_id = $request->user3_id;
        $subkeg->detail = $request->detail;
        $subkeg->file = $request->file;
        $data = User::find($subkeg->user_id)->toArray();
        //dd($data);
        Mail::send('email_subkeg', ['data' => User::find($subkeg->user_id), 'subkeg' => $subkeg], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Subkeg Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        Mail::send('email_subkeg2', ['data' => User::find($subkeg->user2_id), 'subkeg' => $subkeg], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Subkeg Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        Mail::send('email_subkeg3', ['data' => User::find($subkeg->user3_id), 'subkeg' => $subkeg], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Subkeg Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        $subkeg->save();
        return redirect('/subkeg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $subkeg = Subkeg::whereSlug($slug)->firstOrFail();
        return view('web.isi_subkeg', compact('subkeg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subkeg = Subkeg::find($id);
        $kegiatan = Kegiatan::all();
        $user = User::all();
        return view('admin.subkeg.edit', compact('kegiatan','subkeg','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subkeg = Subkeg::find($id);
        $subkeg->nama = $request->nama;
        $subkeg->slug = str_slug($subkeg->nama);
        $subkeg->kegiatan_id = $request->kegiatan_id;
        $subkeg->user_id = $request->user_id;
        $subkeg->user2_id = $request->user2_id;
        $subkeg->user3_id = $request->user3_id;
        $subkeg->detail = $request->detail;
        $subkeg->file = $request->file;
        $subkeg->status = $request->status;
        $data = User::find($subkeg->user_id)->toArray();
        //dd($data);
        Mail::send('email_subkeg_update', ['data' => User::find($subkeg->user_id), 'subkeg' => $subkeg], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Subkeg Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        Mail::send('email_subkeg_update2', ['data' => User::find($subkeg->user2_id), 'subkeg' => $subkeg], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Subkeg Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        Mail::send('email_subkeg_update3', ['data' => User::find($subkeg->user3_id), 'subkeg' => $subkeg], function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject('Subkeg Berhasil Diinput');
            $message->from(env('MAIL_USERNAME'), 'Admin DPPKB');
        });
        $subkeg->save();
        return redirect('/subkeg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subkeg  $subkeg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkeg = Subkeg::find($id);
        $subkeg->delete();
        return redirect('/subkeg');
    }
}
