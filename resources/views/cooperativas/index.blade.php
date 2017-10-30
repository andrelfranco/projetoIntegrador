
@extends('adminlte::page')
    @section('content')

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Cooperativas</h3>
            </div>

            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>CPF/CNPJ</th>
                        <th> </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($cooperativas as $cooperativa)
                        <tr>
                            <th> {!! $cooperativa->id  !!}</th>
                            <td> {!! $cooperativa->razao_social  !!}</td>
                            <td>{!! $cooperativa->nome_fantasia  !!}</td>
                            <td>{!! $cooperativa->cnpj_cpf  !!}</td>
                            <td class="inline-button">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['cooperativas.destroy', $cooperativa->id], 'class' => 'inline-button']) !!}
                                {!! Form::submit('Deletar', ['class' => 'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                                <a href="{{route('cooperativas.edit', ['id' => $cooperativa->id])}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="{{route('cooperativas.show', ['id' => $cooperativa->id])}}" class="btn btn-sm btn-success">Visualizar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    @endsection