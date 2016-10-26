<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\About;

class AboutController extends Controller
{
    private $about;
    public function __construct(About $about)
    {
    	$this->about = $about;
    }

    public function index()
    {
    	$about = $this->about->find(1);
    
    	return view('admin.about.index', compact('about'));
    }

    public function store(Request $request)
    {
    	$about = $this->about->find(1);
    	    	
    	if (! empty($about)) {
    		$about->update($request->all());
    	} else {
    		$this->about->create($request->all());
    	}

    	return redirect()->route('about.index');
    }
}
