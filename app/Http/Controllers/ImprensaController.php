<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Imprensa;

class ImprensaController extends Controller
{
	private $imprensa;
    public function __construct(Imprensa $imprensa)
    {
    	$this->imprensa = $imprensa;
    }

    public function index()
    {
    	$imprensa = $this->imprensa->find(1);
    
    	return view('admin.imprensa.index', compact('imprensa'));
    }

    public function store(Request $request)
    {
    	$imprensa = $this->imprensa->find(1);
    	    	
    	if (! empty($imprensa)) {
    		$imprensa->update($request->all());
    	} else {
    		$this->imprensa->create($request->all());
    	}

    	return redirect()->route('imprensa.index');
    }
}
