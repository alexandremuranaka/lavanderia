<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pacote;
use App\Peca;

class PacoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacotes = Pacote::with('pecas')->orderBy('nome')->get();
       
        return view('admin.pacote.index', compact('pacotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pacote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Adiciona peca ao pacote.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addpecaforjquery($id)
    {
        
        $pecas_not_in = [];
        $pacote = Pacote::with('pecas')->where('id', '=', $id)->first();

        foreach ($pacote->pecas as $item) {
            array_push($pecas_not_in,$item->id);
        }

        $pecas = Peca::whereNotIn('id',$pecas_not_in)->get();  
        return view('admin.pacote.addpeca', compact('pecas','pacote'));
    }

    /**
     * Adiciona peca ao pacote.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addpeca($id)
    {
        
        $checked = [];
        $pecas = Peca::orderBy('nome')->get();
        $pacote = Pacote::with('pecas')->where('id', '=', $id)->first();

        foreach ($pacote->pecas as $item) {
            array_push($checked, $item->id);
        }
        return view('admin.pacote.addpeca', compact('pecas','checked','pacote'));
    }

    /**
     * Adiciona peca ao pacote.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function storepeca(Request $request, $id)
    {
        $pacote = Pacote::find($id)->pecas()->sync($request->produto_id);
        return redirect('/pacote');
    }

}
