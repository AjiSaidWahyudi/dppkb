<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Tag;
use App\Bidang;
use App\Unit;
use App\Program;
use App\Kegiatan;
use App\Subkeg;
use Auth;

class TampilController extends Controller
{
    public function tampil_berita($slug)
    {
    	$berita = Berita::whereSlug($slug)->firstOrFail();
        $ber = Berita::orderBy('views','desc')->paginate(4);
        $tag = Tag::all();
        $viewsCount = $berita->views+1;
        $berita->views = $viewsCount;
        $berita->save();
        $next_id = Berita::where('id', '>', $berita->id)->min('id');
        $prev_id = Berita::where('id', '<', $berita->id)->max('id');
        return view('web.isi_berita', compact("berita", 'ber', 'tag'))->with('next', Berita::find($next_id))->with('prev', Berita::find($prev_id));
    }

    public function tampil_program($slug)
    {
        $program = Program::whereSlug($slug)->firstOrFail();
        $kegiatan = Kegiatan::where('program_id',$program->id)->firstOrFail();
        return view('web.isi_program', compact('program','kegiatan'));
    }

    public function tampil_Kegiatan($slug)
    {
        $kegiatan = Kegiatan::whereSlug($slug)->firstOrFail();
        $subkeg = Subkeg::where('kegiatan_id',$kegiatan->id)->firstOrFail();
        return view('web.isi_kegiatan', compact('kegiatan','subkeg'));
    }

    public function tampil_subkeg($slug)
    {
        $subkeg = Subkeg::whereSlug($slug)->firstOrFail();
        return view('web.isi_subkeg', compact('subkeg'));
    }
}
