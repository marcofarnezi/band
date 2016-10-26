@extends('admin.templates.template')
@section('title')
	Apoiadores
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
        	<div class="panel-body">
                <div class="table-responsive">
                    <a href='{{ route('sponsor.create') }}' class='btn btn-success'>Novo</a>
                    <table class="table table-striped" >
                        <thead>
                            <tr>                                
                                <th>Local/Imagem</th>                                
                                <th>Url</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($sponsors as $sponsor)
                            <tr style="background-color:#7093DB">
                                <td><img src='/images/sponsor/{{ $sponsor->img }}' width="100"></td>
                                <td>{{ $sponsor->url }}</td>
                                <td>
                                    <a href='{{ route('sponsor.edit', ['id' => $sponsor->id]) }}' class='btn btn-primary'>Edit</a>
                                    <a href='{{ route('sponsor.delete', ['id' => $sponsor->id]) }}' class='btn btn-danger'>Excluir</a>
                                </td>
                            </tr>    
                            @endforeach                     
                        </tbody>
                    </table>
                    {{ $sponsors->render() }}
                </div>
                <!-- /.table-responsive -->
            </div>            
        </div>        
    </div>                 
@stop