@extends('admin.templates.template')
@section('title')
	Slider
@stop

@section('error_msg')
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
@stop          

@section('content')

    {!! Form::open(['route' => 'slider.store', 'method' => 'post', 'files' => true]) !!}
    @if($errors->any())
        @include('admin.templates.error')    
    @endif
        
    <div class="row">
        @include('admin.slider._form')   
        <div class="col-lg-12">    
            <div class="form-group">
                {!! Form::submit('Criar slider', []) !!}              
            </div> 
        </div>        
    </div>                 
    {!! Form::close() !!}
@stop