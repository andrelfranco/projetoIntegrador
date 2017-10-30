<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';

    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'data_nascimento',
        'cooperativa_id',
    ];

    public function getDataNascimentoBrAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->data_nascimento)->format('d/m/Y');
    }
}
