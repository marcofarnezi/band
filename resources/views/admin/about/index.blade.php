@extends('admin.templates.template')
@section('title')
	Sobre a Rocka'n'voo
@stop
@section('content')
    {!! Form::model($about, ['route' => 'about.store', 'method' => 'post']) !!}
        @include('admin.about._form')   
        <div class="row">
            <div class="col-lg-12">   
                <div class="form-group">
                    {!! Form::submit('Alterar informação da banda') !!}              
                </div> 
            </div>
        </div>
          

    {!! Form::close() !!}   

    <div class="row">
        <h2>Previa</h2>
        <div class="col-lg-6">    
            @if(!empty($about->text))
                {!! $about->text !!}
            @endif
        </div>        
        <div class="col-lg-6">    
            @if(!empty($about->link))
                {!! $about->link !!}
            @endif
        </div>        
    </div>    
@stop