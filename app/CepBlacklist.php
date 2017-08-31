<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CepBlacklist extends Model
{
    protected $table = 'cep_blacklist';
    protected $fillable = ['cep','descricao'];
}
