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
            {!! Form::open(['route' => 'produtores.store', 'method' => 'post', 'id' => 'form-cadastrar-produtor']) !!}

            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cpj_cnpj', 'CPF') !!}
                {!! Form::text('cpf_cnpj', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_nascimento', 'Data de Nascimento') !!}
                {!! Form::text('data_nascimento', null, ['class' => 'form-control']) !!}
            </div>

            <div style="width: 500px; height: 500px;">
                {!! Mapper::render() !!}
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="form-group">
                {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@stop