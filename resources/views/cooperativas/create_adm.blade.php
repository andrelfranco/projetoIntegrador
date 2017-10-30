
@extends('adminlte::page')
@section('content')
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Administrador</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->

            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['route' => ['cooperativas.storeAdm', $cooperativa->id], 'method' => 'post', 'id' => 'form-cadastrar-cooperativa_adm']) !!}

            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('senha', 'Senha') !!}
                {!! Form::password('senha', ['class' => 'form-control']) !!}
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