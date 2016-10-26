<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slider;
use App\Imprensa;
use App\Agendas;
use App\About;
use App\Map;
use Mail;

class IndexController extends Controller
{
    public function index()    
    {

    	$slider = \App\Slider::all();

        $imprensa = \App\Imprensa::find(1);
        if (! empty($imprensa)) {
            $imprensa = $imprensa->conteudo;
        }

        $agendas = \App\Agendas::all();

        $about = \App\About::find(1);
        
        $sponsors = \App\Sponsors::all();
        
        $map = \App\Map::find(1);

        $contact = \App\Contact::find(1);

        $config = \App\Config::find(1);

    	return view(
            'index.index', 
            compact(
                'slider',
                'imprensa',
                'agendas',
                'about',
                'sponsors',
                'map',
                'contact',
                'config'
                )
            );
    }
   
    public function postContato(Request $request) {        
        $data = $request->all();        
        
        Mail::send('index.contato', compact('data'), function($message) use ($data){
            $message->from($data['email'], $data['name']);
            $message->to('marcofarnezi@gmail.com') ->subject('Contato pelo site');            
        });

        return redirect()->route('index.index')->with('msg_email', 'E-mail enviado com sucesso! Em breve retornaremos seu contato');
    }
}   