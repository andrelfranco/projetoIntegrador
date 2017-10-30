
@extends('adminlte::page')
    @section('content')

        <div class="box box-primary">

            <div class="box-header">
                <h2 class="box-title">{!! $funcionario->nome!!}</h2>
            </div>

            <div class="box-body">

                <div>
                    <b>CPF/CNPJ:</b>
                    {!! $funcionario->cpf_cnpj !!}
                </div>
                <div>
                    <b>Data de Nascimento:</b>
                    {!! $funcionario->data_nascimento_br !!}
                </div>

            </div>

        </div>

    @stop