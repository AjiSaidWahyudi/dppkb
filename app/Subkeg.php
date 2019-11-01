<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kegiatan;

class Subkeg extends Model
{
    protected $table = 'subkeg';
    protected $fillable = ['kegiatan_id', 'user_id', 'user2_id', 'user3_id', 'nama', 'status', 'slug', 'detail', 'file'];
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
