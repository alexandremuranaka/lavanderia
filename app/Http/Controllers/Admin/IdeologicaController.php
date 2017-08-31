<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \StdClass;
use soapClient;

class IdeologicaController extends Controller
{
    //
    public function consultapeca()
    {

		$client = new soapClient("http://www.ideologica.com.br/AllegroNetWeb2/ws/ws_integracao_evolution.asmx", $options = array(
				'trace'=>1, 
				'exceptions'=> 0, 			
				'encoding' => 'UTF-8',
				'soapaction' => '')
		);	

		/*
		'CodigoEmpresaLoja' => '258',
		'CodigoLoja' => '0',
		'Chave' => '66554'
		*/
		$ns = 'http://tempuri.org/';					
		$CodigoEmpresaLoja = '258';
		$CodigoLoja = '0';
		$Chave = '66554';
			
		$CodigoEmpresaLoja = new SOAPHeader($ns, 'CodigoEmpresaLoja', $CodigoEmpresaLoja);
		$CodigoLoja = new SOAPHeader($ns, 'CodigoLoja', $CodigoLoja);
		$Chave = new SOAPHeader($ns, 'Chave', $Chave);
					
		$headers = array(
			$CodigoEmpresaLoja,
			$CodigoLoja,
			$Chave
		);

		$client->__setSoapHeaders($headers);
     
        $RetornaListaPecasPacote = new StdClass();
        $RetornaListaPecasPacote->Chave = '66554';
        $RetornaListaPecasPacote->CodigoEmpresa = '258';
        $RetornaListaPecasPacote->CodigoLoja = '0';

        //RetornarTabelaPacotes
        $RetornarLojas = new StdClass();
        $RetornarLojas->Chave = '66554';
        $RetornarLojas->CodigoEmpresa = '258';
       // $RetornarLojas->CodigoLoja = '0';


        $info = $soapClient->__call("RetornarLojas", $RetornarLojas); 
        dd($client->__getLastRequest() );



    }
}
