
<div class="col-lg-12">
    <div class="form-group">
        {!! Form::label('img', 'Imagem') !!}
        {!! Form::file('img', null) !!}
    </div>  
       	        
    <div class="col-lg-4">
    <div class="panel panel-primary">
            <div class="panel-heading">
                Painel visivel caso preencha <b>TODOS</b> campo à baixo
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('text1', 'Titulo') !!}
                    {!! Form::text('text1', null, ['class' => 'form-control']) !!}
                </div>  
                <div class="form-group">
                    {!! Form::label('text2', 'Corpo') !!}
                    {!! Form::text('text2', null, ['class' => 'form-control']) !!}
                </div>    
            </div>
            <div class="panel-footer">
                LINK
                <div class="form-group">
                    {!! Form::label('url', 'Url') !!}
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                </div>    
                <div class="form-group">
                    {!! Form::label('target', 'Target') !!}
                    {!! Form::select('target', ['' => 'Selecione', '_blank' => '_blank'] ,null, ['class' => 'form-control']) !!}
                </div> 
                <div class="form-group">
                    {!! Form::label('text_link', 'Nome do link') !!}
                    {!! Form::text('text_link', null, ['class' => 'form-control']) !!}
                </div> 
            </div>
        </div>
    </div>            
</div>    
