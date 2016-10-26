<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Slider;

class SliderController extends Controller
{	
	private $slider;

	public function __construct(Slider $slider)
	{
		$this->slider = $slider;
	}

    public function index()
    {
    	$sliders = $this->slider->paginate(2);

    	return view('admin.slider.index', compact('sliders'));
    }    

    public function create()
    {
        
    	return view('admin.slider.create');
    }

    public function store(SliderRequest $request)
    {
    	
    	$imageName = $this->saveImg('img', $request);

		$dataRequest = $request->all();
		$dataRequest['img'] = $imageName;

    	$this->slider->create($dataRequest);

    	return redirect()->route('slider.index');
    }

    public function edit($id)
    {
    	$slider = $this->slider->find($id);

    	return view('admin.slider.edit', compact('slider'));
    }

    public function update($id, Request $request)
    {
    	$dataRequest = $request->all();
    	
    	$slider = $this->slider->find($id);

    	if (! empty($dataRequest['img']) && ! empty($request->file('img')->getClientOriginalName())){
    		$this->removeImg($slider->img);
    		$imageName = $this->saveImg('img', $request);
    		$dataRequest['img'] = $imageName;
    	}

		$slider->update($dataRequest);
		
		return redirect()->route('slider.index');
    }

    public function delete($id)
    {
    	$slider = $this->slider->find($id);
    	$this->removeImg($slider->img);
    	$slider->delete();

    	return redirect()->route('slider.index');
    }

    private function saveImg($name, $request)
    {
    	$imageName = $request->file($name)->getClientOriginalName();    	
	    $request->file($name)->move(
	        base_path() . '/public/images/slider/', $imageName
	    );

	    return $imageName;
    }

    private function removeImg($name)
    {
    	$name = base_path() . '/public/images/slider/' . $name;
    	
        \File::delete($name);        
    }
    

}
