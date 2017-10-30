<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';

    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'placa',
        'capacidade',
        'cooperativa_id'
    ];

    public function cooperativa()
    {
        return $this->belongsTo('App\Cooperativa');
    }
}
