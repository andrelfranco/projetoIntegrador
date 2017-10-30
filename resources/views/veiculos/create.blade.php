
@extends('adminlte::page')

@section('content')

    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Veiculos</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->

            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['route' => 'veiculos.store', 'method' => 'post', 'id' => 'form-cadastrar-veiculo']) !!}

            <div class="form-group">
                {!! Form::label('marca', 'Marca') !!}
                {!! Form::text('marca', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('modelo', 'Modelo') !!}
                {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cor', 'Cor') !!}
                {!! Form::text('cor', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('placa', 'Placa') !!}
                {!! Form::text('placa', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('capacidade', 'Capacidade') !!}
                {!! Form::text ('capacidade', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::select('cooperativas', $cooperativas, null, ['class' => 'form-control']) !!}

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