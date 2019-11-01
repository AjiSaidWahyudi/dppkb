<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bidang;
use App\Unit;
use App\Program;
use App\Kegiatan;
use App\Subkeg;

class Dropdown extends Model
{
    protected $table = 'hasil_program';
    protected $fillable = ['bidang_id', 'unit_id', 'program_id', 'kegiatan_id', 'subkeg_id'];
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function unit()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function program()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function kegiatan()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function subkeg()
    {
        return $this->belongsTo(Bidang::class);
    }
}
