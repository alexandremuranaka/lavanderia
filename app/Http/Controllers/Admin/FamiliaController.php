<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Familia;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retorna a listagem de familia
        $familias = Familia::orderBy('nome')->get();
        return view('admin.familia.index',compact('familias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.familia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $familia_rules = [
            'nome' => 'required'
        ];
        
        $familia_messages = [
            'nome.required' => 'Campo nome é obrigatório'
        ];
        
        $validator = Validator::make($request->all(),$familia_rules,$familia_messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            //store new familia
            $familia = new Familia;
            $familia->nome = $request->nome;
            $familia->save();
            return redirect('/familia');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //store edit familia
        $familia = Familia::find($id);
        return view('admin.familia.edit',compact('familia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $familia_rules = [
            'nome' => 'required'
        ];
        
        $familia_messages = [
            'nome.required' => 'Campo nome é obrigatório'
        ];
        
        $validator = Validator::make($request->all(),$familia_rules,$familia_messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            //update familia
            $familia = Familia::find($id);
            $familia->nome = $request->nome;
            $familia->save();
            return redirect('/familia');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete familia
        $familia = Familia::find($id);
        $familia->delete();
        return redirect('/familia');
    }
}
