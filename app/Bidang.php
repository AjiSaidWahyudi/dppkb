<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;

class Bidang extends Model
{
    protected $table = 'bidang';
    protected $fillable = ['nama'];
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
}
