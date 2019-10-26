<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Foto;

class Album extends Model
{
    protected $table = 'album';
    protected $fillable = ['judul', 'slug', 'detail', 'cover'];
    public function foto()
    {
        return $this->hasMany(Foto::class);
    }
}
