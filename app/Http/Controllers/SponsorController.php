<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SponsorRequest;
use App\Sponsors;

class SponsorController extends Controller
{
    private $sponsor;

	public function __construct(Sponsors $sponsor)
	{
		$this->sponsor = $sponsor;
	}

    public function index()
    {
    	$sponsors = $this->sponsor->paginate(6);

    	return view('admin.sponsor.index', compact('sponsors'));
    }    

    public function create()
    {        
    	return view('admin.sponsor.create');
    }

    public function store(SponsorRequest $request)
    {    	
    	$imageName = $this->saveImg('img', $request);

		$dataRequest = $request->all();
		$dataRequest['img'] = $imageName;        
        
    	$this->sponsor->create($dataRequest);

    	return redirect()->route('sponsor.index');
    }

    public function edit($id)
    {
    	$sponsor = $this->sponsor->find($id);        
        
    	return view('admin.sponsor.edit', compact('sponsor'));
    }

    public function update($id, Request $request)
    {
    	$dataRequest = $request->all();

    	$sponsor = $this->sponsor->find($id);

    	if (! empty($dataRequest['img']) && ! empty($request->file('img')->getClientOriginalName())){
    		$this->removeImg($sponsor->img);
    		$imageName = $this->saveImg('img', $request);
    		$dataRequest['img'] = $imageName;
    	}

		$sponsor->update($dataRequest);
		
		return redirect()->route('sponsor.index');
    }

    public function delete($id)
    {
    	$sponsor = $this->sponsor->find($id);
    	$this->removeImg($sponsor->img);
    	$sponsor->delete();

    	return redirect()->route('sponsor.index');
    }

    private function saveImg($name, $request)
    {
    	$imageName = $request->file($name)->getClientOriginalName();    	
	    $request->file($name)->move(
	        base_path() . '/public/images/sponsor/', $imageName
	    );

	    return $imageName;
    }

    private function removeImg($name)
    {
    	$name = base_path() . '/public/images/sponsor/' . $name;
    	
        \File::delete($name);        
    }
}
