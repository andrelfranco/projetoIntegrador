
@extends('adminlte::page')
@section('content')

    <div class="box box-primary">

        <div class="box-header">
            <h2 class="box-title">Veículo de placa: {!! $veiculo->placa !!}</h2>
        </div>

        <div class="box-body">

            <div>
                <b>Marca:</b>
                {!! $veiculo->marca !!}
            </div>
            <div>
                <b>Modelo:</b>
                {!! $veiculo->modelo !!}
            </div>
            <div>
                <b>Cor:</b>
                {!! $veiculo->cor !!}
            </div>
            <div>
                <b>Capacidade:</b>
                {!! $veiculo->capacidade !!}
            </div>

        </div>

    </div>

@stop