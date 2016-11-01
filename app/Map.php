<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $table = 'map';
    protected $fillable = [
    	'lat',
    	'lng'
    ];
}
