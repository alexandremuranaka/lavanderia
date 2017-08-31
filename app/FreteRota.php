<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreteRota extends Model
{
    protected $table = 'frete_rotas';
    protected $fillable = ['nome','ativo','dias','periodos','frete_id','loja_regiao_id','valor_de','valor_por'];

    public function frete()
    {
        return $this->belongsTo('App\Frete','frete_id');
    }

    public function regioes()
    {
        return $this->hasMany('LojaRegiao','loja_regiao_id');
    }

    public function setValorDeAttribute($value)
    {
        $this->attributes['valor_de'] = str_replace(',','.',str_replace('.','',$value));
    }
}
