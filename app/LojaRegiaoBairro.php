<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LojaRegiaoBairro extends Model
{
    protected $table = 'loja_regiao_bairros';

    protected $fillable = ['loja_regiao_id','nome'];

    public function regiao()
    {
        return $this->belongsTo('App\LojaRegiao','loja_regiao_id');
    }
}
