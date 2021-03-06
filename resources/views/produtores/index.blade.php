
@extends('adminlte::page')
@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Produtores</h3>
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
                @foreach($produtores as $produtor)
                    <tr>
                        <th> {!! $produtor->id  !!}</th>
                        <td> {!! $produtor->nome  !!}</td>
                        <td>{!! $produtor->cpf_cnpj  !!}</td>
                        <td>{!! $produtor->data_nascimento_br  !!}</td>
                        <td class="inline-button">
                            {!! Form::open(['method' => 'DELETE', 'route' => ['produtores.destroy', $produtor->id], 'class' => 'inline-button']) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('produtores.edit', ['id' => $produtor->id])}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{route('produtores.show', ['id' => $produtor->id])}}" class="btn btn-sm btn-success">Visualizar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>

@endsection