
<div class="col-lg-12">
    <div class="form-group">
        {!! Form::label('img', 'Imagem') !!}
        {!! Form::file('img', null) !!}
    </div>  
</div>
<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('data', 'Data/Hora') !!}
        {!! Form::text('data', null, ['class' => 'form-control data']) !!}
    </div>  
</div>
<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('valor', 'Valor de entrada') !!}
        {!! Form::text('valor', null, ['class' => 'form-control']) !!}
    </div>  
</div>
       	                