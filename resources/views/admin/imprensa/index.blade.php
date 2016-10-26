@extends('admin.templates.template')
@section('title')
	Imprensa
@stop
@section('content')
    {!! Form::model($imprensa, ['route' => 'imprensa.store', 'method' => 'post']) !!}
        @include('admin.imprensa._form')   
        <div class="row">
            <div class="col-lg-12">   
                <div class="form-group">
                    {!! Form::submit('Alterar material de imprensa') !!}              
                </div> 
            </div>
        </div>
          

    {!! Form::close() !!}   

    <div class="row">
        <h2>Previa</h2>
        <div class="col-lg-12">    
            @if(!empty($imprensa->conteudo))
                {!! $imprensa->conteudo !!}
            @endif
        </div>        
    </div>    
@stop