<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    protected $table = 'infografis';
    protected $fillable = ['nama', 'slug', 'foto'];
}
