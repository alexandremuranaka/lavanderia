<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Peca;
use App\Familia;



class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retorna a listagem de familia
        $familia_filter = 0;
        $pecas = Peca::with('familias')->orderBy('nome')->get();
        $familias = Familia::orderBy('nome')->get();
        return view('admin.peca.index',compact('pecas','familias','familia_filter'));
    }

    public function familia(Request $request)
    {
        if($request->id == 0)
        {
            return redirect('peca');
        }
        $familia_filter = $request->id;
        $pecas = Peca::with('familias')->orderBy('nome')->where('familia_id','=',$request->id)->get();
        $familias = Familia::orderBy('nome')->get();
        return view('admin.peca.index',compact('pecas','familias','familia_filter'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $familias = Familia::orderBy('nome')->get();
        return view('admin.peca.create',compact('familias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->familia_id == '' | $request->familia_id == null)
        {
            unset($request->familia_id);
        } 
        $peca_rules = [
            'nome' => 'required',
            'familia_id' => 'required'
        ];

        $peca_messages = [
            'nome.required' => 'Campo nome é obrigatório',
            'familia_id.required' => 'Selecione a Familia'
        ];

        $validator = Validator::make($request->all(),$peca_rules,$peca_messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            //store new peca
            $peca = new Peca;
            $peca->nome = $request->nome;
            $peca->familia_id = $request->familia_id;
            $peca->save();
            return redirect('peca');
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
        return redirect("/peca/$id/edit");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //store edit peca
        $familias = Familia::orderBy('nome')->get();
        $peca = Peca::find($id);
        return view('admin.peca.edit',compact('peca','familias'));
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
        if( $request->familia_id == '' | $request->familia_id == null)
        {
            unset($request->familia_id);
        } 
        $peca_rules = [
            'nome' => 'required',
            'familia_id' => 'required'
        ];
        
        $peca_messages = [
            'nome.required' => 'Campo nome é obrigatório',
            'familia_id.required' => 'Selecione a Familia'
        ];

        $validator = Validator::make($request->all(),$peca_rules,$peca_messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            //update peca
            $peca = Peca::find($id);
            $peca->nome = $request->nome;
            $peca->familia_id = $request->familia_id;
            $peca->save();
            return redirect('/peca');
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
        //delete peca
        $peca = Peca::find($id);
        $peca->delete();
        return redirect('peca');
    }

}
