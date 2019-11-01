<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $fillable = ['judul', 'tanggal_mulai', 'tanggal_selesai', 'jam', 'detail'];
    public function getJamAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['jam'])->isoFormat('HH:mm');
    }
    public function getTanggalMulaiAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tanggal_mulai'])->isoFormat('LL');
    }
    public function getTanggalSelesaiAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tanggal_selesai'])->isoFormat('LL');
    }
}
