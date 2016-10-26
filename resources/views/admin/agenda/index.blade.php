@extends('admin.templates.template')
@section('title')
	Eventos
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
        	<div class="panel-body">
                <div class="table-responsive">
                    <a href='{{ route('agenda.create') }}' class='btn btn-success'>Novo</a>
                    <table class="table table-striped" >
                        <thead>
                            <tr>                                
                                <th>Local/Imagem</th>
                                <th>Data/Horário</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($agendas as $agenda)
                            <tr>
                                <td><img src='/images/event/{{ $agenda->img }}' width="100"></td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $agenda->data)->format('d/m/Y H:i') }}</td>
                                <td>{{ $agenda->valor }}</td>
                                <td>
                                    <a href='{{ route('agenda.edit', ['id' => $agenda->id]) }}' class='btn btn-primary'>Edit</a>
                                    <a href='{{ route('agenda.delete', ['id' => $agenda->id]) }}' class='btn btn-danger'>Excluir</a>
                                </td>
                            </tr>    
                            @endforeach                     
                        </tbody>
                    </table>
                    {{ $agendas->render() }}
                </div>
                <!-- /.table-responsive -->
            </div>            
        </div>        
    </div>                 
@stop