<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Kegiatan;
use App\Subkeg;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $program = Program::all();
        $kegiatan = Kegiatan::all();
        $subkeg = Subkeg::all();
        return view('home', compact('program','kegiatan','subkeg'));
    }
}
