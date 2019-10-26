<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;
use App\Kegiatan;
use App\Dropdown;

class Program extends Model
{
    protected $table = 'program';
    protected $fillable = ['unit_id', 'nama', 'detail', 'file'];
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
    public function dropdown()
    {
        return $this->hasMany(Dropdown::class);
    }
}
