@extends('admin.templates.template')
@section('title')
	Editar Ápoiador
@stop

@section('error_msg')
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
@stop          

@section('content')

    {!! Form::model($sponsor, ['route' => ['sponsor.update', $sponsor->id], 'method' => 'put', 'files' => true]) !!}
    @if($errors->any())
        @include('admin.templates.error')    
    @endif
        
    <div class="row">
        <div class="col-lg-12" style="background-color:#7093DB">    
            <img src='/images/sponsor/{{ $sponsor->img }}' width="200" />
        </div>
        @include('admin.sponsor._form')   
        <div class="col-lg-12">    
            <div class="form-group">
                {!! Form::submit('Editar Apoiador', []) !!}              
            </div> 
        </div>
        
    </div>                
    {!! Form::close() !!}
@stop