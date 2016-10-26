
<div class="col-lg-5">
    <div class="form-group">
        {!! Form::label('img', 'Imagem') !!}
        {!! Form::file('img', null) !!}
    </div>  
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('url', 'Link da pagina do apoiador') !!}
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
    </div>  
</div>
       	                