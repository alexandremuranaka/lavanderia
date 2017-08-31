<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LojaController extends CrudController
{
    public function __construct()
    {
        $this->objectBase = new \App\Loja();
        $this->viewBase = 'loja';
        $this->urlBase = 'loja';
    }
}
