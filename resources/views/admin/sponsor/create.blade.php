@extends('admin.templates.template')
@section('title')
	Novo Apoiador
@stop

@section('error_msg')
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
@stop          

@section('content')

    {!! Form::open(['route' => 'sponsor.store', 'method' => 'post', 'files' => true]) !!}
    @if($errors->any())
        @include('admin.templates.error')    
    @endif
        
    <div class="row">
        @include('admin.sponsor._form')   
        <div class="col-lg-12">    
            <div class="form-group">
                {!! Form::submit('Criar apoiador', []) !!}              
            </div> 
        </div>
        
    </div>                 
    {!! Form::close() !!}
@stop