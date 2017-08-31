<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Peca;
use App\Familia;
use App\Pacote;

class CleanController extends Controller
{
    public function index()
    {
        $homepage = true;
        return view('site.index',compact('homepage'));
    }

    public function cesto()
    {

    	$pacotes = Pacote::orderBy('nome')->with('pecas')->get();
    	return view('site.cesto', compact('pacotes'));
    }
    
    public function cestocustomizado()
    {
    	return view('site.cestocustomizado');
    }
}
