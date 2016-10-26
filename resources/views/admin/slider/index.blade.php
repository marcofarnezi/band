@extends('admin.templates.template')
@section('title')
	Slider
@stop
@section('content')
                            
    <div class="row">
        <div class="col-lg-12">
        	<div class="panel-body">
                <div class="table-responsive">
                    <a href='{{ route('slider.create') }}' class='btn btn-success'>Novo</a>
                    <table class="table table-striped" >
                        <thead>
                            <tr>                                
                                <th>Imagem</th>                                                                
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($sliders as $slider)
                            <tr style="background-image:url('/images/slider/{{ $slider->img }}');background-size: 800px;  background-repeat: no-repeat;">
                                <td  height="500" style="vertical-align: middle;">
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary transbox" >                                                
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <p>Título {{ $slider->text1}}</p>
                                                        
                                                    </div>  
                                                    <div class="form-group">
                                                        <p>Texto {{ $slider->text2}}</p>
                                                    </div>  
                                                      
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="form-group">
                                                        <a href="{{ $slider->url }}" target="{{ $slider->target }}">{{ $slider->text_link }}</a>
                                                    </div>  
                                                    <div class="form-group">
                                                        <a href='{{ route('slider.edit', ['id' => $slider->id]) }}' class='btn btn-primary'>Edit</a>
                                                        <a href='{{ route('slider.delete', ['id' => $slider->id]) }}' class='btn btn-danger'>Excluir</a>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>    
                            @endforeach                     
                        </tbody>
                    </table>
                    {{ $sliders->render() }}
                </div>
                <!-- /.table-responsive -->
            </div>            
        </div>        
    </div>                 
@stop