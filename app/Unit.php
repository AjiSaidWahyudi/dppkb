<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bidang;
use App\Program;
use App\Dropdown;
use App\Pegawai;
use App\User;

class Unit extends Model
{
    protected $table = 'unit';
    protected $fillable = ['bidang_id', 'nama'];
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function program()
    {
        return $this->hasMany(Program::class);
    }
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
