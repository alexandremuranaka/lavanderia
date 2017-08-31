<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LojaRegiao extends Model
{
    protected $table = 'loja_regioes';

    protected $fillable = ['loja_id','nome','mapa_url'];

    public function loja()
    {
        return $this->belongsTo('App\Loja','loja_id');
    }

    public function bairros()
    {
        return $this->hasMany('App\LojaRegiaoBairro','loja_regiao_id');
    }

    public function rotas()
    {
        return $this->hasMany('App\FreteRota','loja_regiao_id')->with('frete');
    }
}
