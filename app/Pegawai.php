<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['unit_id', 'nama', 'email', 'user_id'];
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
