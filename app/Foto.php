<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

class Foto extends Model
{
    protected $table = 'foto';
    protected $fillable = ['album_id', 'judul', 'slug', 'detail', 'image', 'ukuran'];
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
