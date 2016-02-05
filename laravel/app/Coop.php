<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coop extends Model
{
    protected $table = 'coops';
    protected $fillable = [
        'name', 'administrators'
    ];
    protected $casts = [
        'administrators' => 'array'
    ];
}
