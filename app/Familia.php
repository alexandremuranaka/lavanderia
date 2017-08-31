<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    
    protected $table = 'familias';
    protected $fillable = ['nome'];


    public function peca()
    {
        return $this->HasMany('App\Peca');
    }
}
