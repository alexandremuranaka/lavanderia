<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    //
    protected $table = 'pacotes';
    protected $fillable = ['nome','descricao'];


    public function pecas()
    {
        return $this->belongsToMany('App\Peca');
    }

}
