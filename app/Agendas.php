<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendas extends Model
{
	protected $dates = ['dob'];
	
    protected $fillable = [
        'img',
        'data',
        'valor'
    ];
}
