<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $fillable = ['berita_id', 'nama', 'email', 'isi_komentar'];
    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
}
