<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Bidang;
use App\Unit;
use App\Program;
use App\Kegiatan;
use App\Subkeg;
use App\Dropdown;

class DropdownController extends Controller
{
    public function index()
    {
    	$bidang = Bidang::pluck("nama","id");
    	return view('admin.kelola_program.index', compact('bidang'));
    }

    public function getUnit($id)
    {
        $unit = Unit::where("bidang_id",$id)->pluck("nama","id");
        return json_encode($unit);
    }

    public function getProgram($id)
    {
        $program = Program::where("unit_id",$id)->pluck("nama","id");
        return json_encode($program);
    }

    public function getKegiatan($id)
    {
        $kegiatan = Kegiatan::where("program_id",$id)->pluck("nama","id");
        return json_encode($kegiatan);
    }

    public function getSubkeg($id)
    {
        $subkeg = Subkeg::where("kegiatan_id",$id)->pluck("nama","id");
        return json_encode($subkeg);
    }

    public function store(Request $request)
    {
        $hasil_program = new Dropdown;
        $hasil_program->bidang_id = $request->bidang_id;
        $hasil_program->unit_id = $request->unit_id;
        $hasil_program->program_id = $request->program_id;
        $hasil_program->kegiatan_id = $request->kegiatan_id;
        $hasil_program->subkeg_id = $request->subkeg_id;
        $hasil_program->save();
        return redirect('/home');
    }
}
