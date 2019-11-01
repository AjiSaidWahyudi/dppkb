<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Program;
use App\Subkeg;
use App\Dropdown;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['program_id', 'user_id', 'user2_id', 'nama', 'status', 'slug', 'detail', 'file'];
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function subkeg()
    {
        return $this->hasMany(Subkeg::class);
    }
    public function dropdown()
    {
        return $this->hasMany(Dropdown::class);
    }
}
