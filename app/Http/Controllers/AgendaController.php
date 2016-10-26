<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AgendaRequest;
use App\Agendas;

class AgendaController extends Controller
{
   	private $agenda;

	public function __construct(Agendas $agenda)
	{
		$this->agenda = $agenda;
	}

    public function index()
    {
    	$agendas = $this->agenda->paginate(6);

    	return view('admin.agenda.index', compact('agendas'));
    }    

    public function create()
    {        
    	return view('admin.agenda.create');
    }

    public function store(AgendaRequest $request)
    {    	
    	$imageName = $this->saveImg('img', $request);

		$dataRequest = $request->all();
		$dataRequest['img'] = $imageName;
        $dataRequest['data'] = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', $dataRequest['data'] )->format('Y-m-d H:i:s');        
        
    	$this->agenda->create($dataRequest);

    	return redirect()->route('agenda.index');
    }

    public function edit($id)
    {
    	$agenda = $this->agenda->find($id);
        $agenda->data =  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $agenda->data)->format('d/m/Y H:i:s');
        
    	return view('admin.agenda.edit', compact('agenda'));
    }

    public function update($id, Request $request)
    {
    	$dataRequest = $request->all();

    	$dataRequest['data'] = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', $dataRequest['data'] )->format('Y-m-d H:i:s');
        
    	$agenda = $this->agenda->find($id);

    	if (! empty($dataRequest['img']) && ! empty($request->file('img')->getClientOriginalName())){
    		$this->removeImg($agenda->img);
    		$imageName = $this->saveImg('img', $request);
    		$dataRequest['img'] = $imageName;
    	}

		$agenda->update($dataRequest);
		
		return redirect()->route('agenda.index');
    }

    public function delete($id)
    {
    	$agenda = $this->agenda->find($id);
    	$this->removeImg($agenda->img);
    	$agenda->delete();

    	return redirect()->route('agenda.index');
    }

    private function saveImg($name, $request)
    {
    	$imageName = $request->file($name)->getClientOriginalName();    	
	    $request->file($name)->move(
	        base_path() . '/public/images/event/', $imageName
	    );

	    return $imageName;
    }

    private function removeImg($name)
    {
    	$name = base_path() . '/public/images/event/' . $name;
    	
        \File::delete($name);        
    }
}