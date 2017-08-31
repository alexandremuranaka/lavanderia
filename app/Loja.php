<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = 'lojas';

    protected $fillable = ['nome','ativo','cnpj','params'];

    public function regioes()
    {
        return $this->hasMany('App\LojaRegiao','loja_id')->with('bairros');
    }
}
