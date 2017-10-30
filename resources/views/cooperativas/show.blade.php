
@extends('adminlte::page')
    @section('content')

        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title">{!! $cooperativa->razao_social !!}</h3>
            </div>

            <div>
                <a href="{!! route('cooperativas.adicionarAdm', $cooperativa->id) !!}" class="btn btn-primary">
                    Adicionar Adm
                </a>
            </div>

            <div class="box-body">

                {!! $cooperativa->nome_fantasia !!}
                {!! $cooperativa->cnpj_cpf !!}

            </div>

        </div>

    @stop