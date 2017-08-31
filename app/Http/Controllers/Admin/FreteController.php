<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FreteController extends CrudController
{
    public function __construct()
    {
        $this->objectBase = new \App\Frete();
        $this->viewBase = 'frete';
        $this->urlBase = 'frete';
    }

    public function edit($id)
    {
        $register = \App\Frete::with('rotas')->find($id);
        return view('admin.frete.editor',compact('register'));
    }

    public function rotaCreate($frete_id)
    {
        $frete = \App\Frete::find($frete_id);
        $regioes = \App\LojaRegiao::get();
        return view('admin.frete.rota',compact('frete','regioes'));
    }

    public function rotaStore(Request $request,$frete_id)
    {
        $rota = new \App\FreteRota();
        $rota->frete_id = $frete_id;
        $rota->loja_regiao_id = $request->get('loja_regiao_id');
        $rota->nome = $request->get('nome');
        $rota->ativo = $request->get('ativo');
        $rota->nome = $request->get('nome');
        $arrDias = $request->get('dias');
        $rota->dias = is_array($arrDias) ? implode('',arsort($arrDias)) : null;
        $arrPeriodos = $request->get('periodos');
        $rota->periodos = is_array($arrPeriodos) ? implode('',arsort($arrPeriodos)) : null;
        $rota->valor_de = $request->get('valor_de');
        $rota->valor_por = $request->get('valor_por');
        $rota->save();

        return redirect('/frete/'.$frete_id)->with('msgType','success')->with('msgBody','Rota cadastrada com sucesso!');
    }
}
