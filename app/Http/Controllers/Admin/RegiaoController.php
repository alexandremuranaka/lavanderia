<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class RegiaoController extends CrudController
{
    public function __construct()
    {
        $this->objectBase = new \App\LojaRegiao();
        $this->viewBase = 'regiao';
        $this->urlBase = 'regiao';
    }

    public function create()
    {
        $Lojas = \App\Loja::get();
        View::share('Lojas',$Lojas);
        return parent::create();
    }

    public function edit($id)
    {
        $Lojas = \App\Loja::get();
        View::share('Lojas',$Lojas);
        return parent::edit($id);
    }

    public function bairro($regiao_id)
    {
        $regiao = \App\LojaRegiao::with('loja')->with('bairros')->find($regiao_id);
        return view('admin.regiao.bairros',compact('regiao'));
    }

    public function bairroStore(Request $request,$regiao_id)
    {
        $bairro = new \App\LojaRegiaoBairro();
        $bairro->loja_regiao_id = $regiao_id;
        $bairro->nome = $request->get('nome');
        $bairro->save();
        
        return redirect('/regiao/'.$regiao_id.'/bairro');
    }

    public function bairroDelete($regiao_id,$bairro_id)
    {
        \App\LojaRegiaoBairro::destroy($bairro_id);

        return back();
    }
}
