<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    protected $objectBase = '';
    protected $viewBase = '';
    protected $urlBase = '';

    public function index()
    {
        $registers = $this->objectBase->get();
        return view('admin.'.$this->viewBase.'.index',compact('registers'));
    }

    public function create()
    {
        return view('admin.'.$this->viewBase.'.editor');
    }

    public function store(Request $request)
    {
        $this->objectBase->fill($request->all());
        if($this->objectBase->save())
        {
            return redirect($this->urlBase.'/'.$this->objectBase->id)->with('msgType','success')->with('msgBody','Registro gravado com sucesso!');
        }
        else
        {
            return back()->with('msgType','danger')->with('msgBody','Não foi possível efetuar a gravação do registro.');
        }        
    }

    public function edit($id)
    {
        $register = $this->objectBase->findOrFail($id);
        return view('admin.'.$this->viewBase.'.editor',compact('register'));
    }

    public function update(Request $request,$id)
    {
        $register = $this->objectBase->findOrFail($id);
        $register->fill($request->all());
        if($register->save())
        {
            return redirect($this->urlBase.'/'.$id)->with('msgType','success')->with('msgBody','Registro atualizado com sucesso!');
        }
        else
        {
            return back()->with('msgType','danger')->with('msgBody','Não foi possível efetuar a atualização do registro.');
        }       
    }

    public function delete($id)
    {
        $register = $this->objectBase->findOrFail($id);
        if($register->delete())
        {
            return redirect($this->urlBase)->with('msgType','success')->with('msgBody','Registro excluído com sucesso!');
        }
        else
        {
            return back()->with('msgType','danger')->with('msgBody','Não foi possível efetuar a exclusão do registro.');
        }       
    }
}
