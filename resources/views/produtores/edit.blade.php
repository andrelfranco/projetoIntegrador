@extends('adminlte::page')

@section('content')

    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Produtor</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->

            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! Form::model($produtor ,['route' => ['produtores.update', $produtor->id], 'method' => 'PATCH', 'id' => 'form-editar-produtor']) !!}

            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cpf_cnpj', 'CPF') !!}
                {!! Form::text('cpf_cnpj', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_nascimento', 'Data de Nascimento') !!}
                {!! Form::text('data_nascimento', $produtor->data_nascimento_br, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="form-group">
                {!! Form::submit('Salvar Alterações', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@stop