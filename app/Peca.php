<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'pecas';
    protected $fillable = ['nome','familia_id'];

    public function familias()
    {
        return $this->belongsTo('App\Familia','familia_id');
    }

    public function pacotes()
    {
        return $this->belongsToMany('App\Pacote');
    }
}
