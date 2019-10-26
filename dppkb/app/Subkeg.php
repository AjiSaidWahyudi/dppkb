<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kegiatan;

class Subkeg extends Model
{
    protected $table = 'subkeg';
    protected $fillable = ['kegiatan_id', 'nama', 'detail', 'file'];
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
