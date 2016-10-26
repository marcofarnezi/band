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

    {!! Form::model($slider, ['route' => ['slider.update', $slider->id], 'method' => 'put', 'files' => true]) !!}
    @if($errors->any())
        @include('admin.templates.error')    
    @endif
        
    <div class="row" style="background-image:url('/images/slider/{{ $slider->img }}');background-size: 500px">
        @include('admin.slider._form')
        <div class="col-lg-12">    
            <div class="form-group">
                {!! Form::submit('Editar slider', []) !!}              
            </div> 
        </div>
        
    </div>                 
    {!! Form::close() !!}
@stop