
@extends('adminlte::page')
    @section('content')
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Funcionarios</h3>
            </div>

            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CPF/CNPJ</th>
                        <th>Data de Nascimento</th>
                        <th> </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($funcionarios as $funcionario)
                        <tr>
                            <th> {!! $funcionario->id  !!}</th>
                            <td> {!! $funcionario->nome  !!}</td>
                            <td>{!! $funcionario->cpf_cnpj  !!}</td>
                            <td>{!! $funcionario->data_nascimento_br  !!}</td>
                            <td class="inline-button">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['funcionarios.destroy', $funcionario->id], 'class' => 'inline-button']) !!}
                                {!! Form::submit('Deletar', ['class' => 'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                                <a href="{{route('funcionarios.edit', ['id' => $funcionario->id])}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="{{route('funcionarios.show', ['id' => $funcionario->id])}}" class="btn btn-sm btn-success">Visualizar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    @endsection