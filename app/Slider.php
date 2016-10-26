<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
    	'img',
    	'text1',
    	'text2',
    	'url',
    	'target',
    	'text_link'
    ];
}
