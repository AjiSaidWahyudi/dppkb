<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bidang;
use App\Unit;
use App\Program;
use App\Kegiatan;
use App\Subkeg;

class Tampil_programController extends Controller
{
    public function index()
    {
    	$program = Program::with('Kegiatan')->get();
        $unit = Unit::all();
        $bidang = Bidang::orderBy('id','desc')->get();
        $kegiatan = Kegiatan::all();
        $subkeg = Subkeg::all();
        return view('web.program',compact('program','bidang','unit','kegiatan','subkeg'));
    }
}
