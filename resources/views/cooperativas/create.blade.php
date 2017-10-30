
@extends('adminlte::page')
    @section('content')
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Cadastro de Cooperativa</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->

                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {!! Form::open(['route' => 'cooperativas.store', 'method' => 'post', 'id' => 'form-cadastrar-cooperativa']) !!}

                <div class="form-group">
                    {!! Form::label('razao_social', 'Razão Social') !!}
                    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nome_fantasia', 'Nome Fantasia') !!}
                    {!! Form::text('nome_fantasia', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cnpj_cpf', 'CPF/CNPJ') !!}
                    {!! Form::text('cnpj_cpf', null, ['class' => 'form-control']) !!}
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