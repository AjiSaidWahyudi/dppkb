<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;
use App\Komentar;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul_berita', 'slug', 'user_id', 'tag_id', 'foto_berita', 'isi_berita', 'views'];
    public function tag()
    {
    	return $this->belongsToMany(Tag::class);
    }
    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->isoFormat('LL');
    }
}
