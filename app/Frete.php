<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    protected $table = 'fretes';
    protected $fillable = ['nome','ativo','tem_rota','prazo_entrega'];

    public function rotas()
    {
        return $this->hasMany('App\FreteRota','frete_id');
    }
}
