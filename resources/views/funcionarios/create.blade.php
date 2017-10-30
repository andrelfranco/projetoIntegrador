
@extends('adminlte::page')

@section('content')

    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Funcionario</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->

            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['route' => 'funcionarios.store', 'method' => 'post', 'id' => 'form-cadastrar-funcionario']) !!}

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

            <div class="form-group">

                {!! Form::label('cooperativa_id', 'Cooperativas') !!}
                {!! Form::select('cooperativa_id', $cooperativas, null, ['class' => 'form-control']) !!}

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