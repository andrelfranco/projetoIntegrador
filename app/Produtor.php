<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $table = 'produtores';

    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'data_nascimento'
    ];

    public function getDataNascimentoBrAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->data_nascimento)->format('d/m/Y');
    }

}
