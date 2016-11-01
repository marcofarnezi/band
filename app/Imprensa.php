<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imprensa extends Model
{
    protected $table = 'imprensa';
    protected $fillable = [
    	'conteudo'
    ];
}
