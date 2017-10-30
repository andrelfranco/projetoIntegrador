<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    protected $table = 'cooperativas';

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj_cpf',
    ];

    public function veiculos(){
        return $this->hasMany('Veiculo');
    }
}
