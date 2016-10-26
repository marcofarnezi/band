@extends('admin.templates.template')
@section('title')
	Editar evento
@stop

@section('error_msg')
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
@stop          

@section('content')

    {!! Form::model($agenda, ['route' => ['agenda.update', $agenda->id], 'method' => 'put', 'files' => true]) !!}
    @if($errors->any())
        @include('admin.templates.error')    
    @endif
        
    <div class="row">
        <div class="col-lg-12">    
            <img src='/images/event/{{ $agenda->img }}' width="200" />
        </div>
        @include('admin.agenda._form')   
        <div class="col-lg-12">    
            <div class="form-group">
                {!! Form::submit('Criar evento', []) !!}              
            </div> 
        </div>
        
    </div>                
    {!! Form::close() !!}
@stop