<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;
use App\Dropdown;

class Bidang extends Model
{
    protected $table = 'bidang';
    protected $fillable = ['nama'];
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
    public function dropdown()
    {
        return $this->hasMany(Dropdown::class);
    }
}
