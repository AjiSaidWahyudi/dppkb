<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Pengumuman;
use App\Infografis;
use App\Tag;
use App\Album;
use App\Agenda;
use App\Bidang;
use App\Unit;
use App\Program;
use App\Kegiatan;
use App\Subkeg;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $berita = Berita::orderBy('id','DESC')->paginate(4);
        $berita2 = Berita::orderBy('views','ASC')->paginate(4);
        $pengumuman = Pengumuman::orderBy('id','DESC')->paginate(4);
        $infografis = Infografis::orderBy('id','DESC')->paginate(3);
        $tag = Tag::all();
        $album = Album::orderBy('id','DESC')->paginate(2);
        $agenda = Agenda::orderBy('id','DESC')->paginate(4);
        $program = Program::all();
        $unit = Unit::all();
        $bidang = Bidang::all();
        $kegiatan = Kegiatan::all();
        $subkeg = Subkeg::all();
        return view('welcome',compact('berita', 'berita2', 'pengumuman', 'infografis','tag', 'album', 'agenda', 'program','bidang','unit','kegiatan','subkeg'))->with('i',($request->input('page',1)-1)*4);
    }
}
