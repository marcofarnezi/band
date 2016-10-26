<div class="row">
    <div class="col-lg-6">                
    	{!! Form::label('text', 'Sobre a banda') !!}
    </div>
    <div class="col-lg-12">                        
        {!! Form::textarea('text', null, ['rows' => '20', 'cols' => '70', 'class' => 'form-control']) !!}        
    </div>            
    <div class="col-lg-6">                
    	{!! Form::label('link', 'Sobre os integrantes') !!}
    </div>
    <div class="col-lg-12">                        
        {!! Form::textarea('link', null, ['rows' => '20', 'cols' => '70', 'class' => 'form-control']) !!}        
    </div>
</div>  