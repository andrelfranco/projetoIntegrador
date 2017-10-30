
@extends('adminlte::page')
@section('content')

    <div class="box box-primary">

        <div class="box-header">
            <h2 class="box-title">{!! $produtor->nome!!}</h2>
        </div>

        <div class="box-body">

            <div>
                <b>CPF/CNPJ:</b>
                {!! $produtor->cpf_cnpj !!}
            </div>
            <div>
                <b>Data de Nascimento:</b>
                {!! $produtor->data_nascimento_br !!}
            </div>

        </div>

    </div>

@stop