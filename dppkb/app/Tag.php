<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['label','slug'];
    public function berita()
    {
    	return $this->hasMany(Berita::class);
    }
}
