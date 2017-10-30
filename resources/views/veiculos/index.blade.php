
@extends('adminlte::page')
@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Veiculos</h3>
        </div>

        <div class="box-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Veiculo</th>
                    <th>Cor</th>
                    <th>Placa</th>
                    <th>Cooperativa</th>
                    <th> </th>
                </tr>
                </thead>

                <tbody>
                @foreach($veiculos as $veiculo)
                    <tr>
                        <th> {!! $veiculo->id  !!}</th>
                        <td> {!! $veiculo->marca  !!} - {!! $veiculo->modelo  !!}</td>
                        <td>{!! $veiculo->cor  !!}</td>
                        <td>{!! $veiculo->placa  !!}</td>
                        <td>{!! $veiculo->cooperativa->nome_fantasia  !!}</td>
                        <td class="inline-button">
                            {!! Form::open(['method' => 'DELETE', 'route' => ['veiculos.destroy', $veiculo->id], 'class' => 'inline-button']) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('veiculos.edit', ['id' => $veiculo->id])}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{route('veiculos.show', ['id' => $veiculo->id])}}" class="btn btn-sm btn-success">Visualizar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>

@endsection