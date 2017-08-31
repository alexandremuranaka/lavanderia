<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Chaveamento de dominios por ambiente
switch(env('APP_ENV'))
{
    case 'local':
        $administrador = 'ce-adm.cleanexpress.local';
    break;
    case 'staging':
        $administrador = 'homolog-ce-adm.cleanexpress.com.br';
    break;
    case 'production':
        $administrador = 'ce-adm.cleanexpress.com.br';
    break;
    default:
        echo 'Ambiente não configurado';
}
if(isset($_SERVER['SERVER_NAME']))
{
    if($_SERVER['SERVER_NAME']==$administrador)
    {
        Auth::routes();
        if(Route::group(['middleware'=>'auth','namespace'=>'Admin'],function(){
            Route::get('/',function(){
                return redirect('/home');
            });
            Route::get('/home', 'HomeController@index')->name('home');
            // Lojas
            Route::get('/loja','LojaController@index');
            Route::get('/loja/create','LojaController@create');
            Route::post('/loja/create','LojaController@store');
            Route::get('/loja/{id}','LojaController@edit');
            Route::post('/loja/{id}','LojaController@update');
            Route::get('/loja/{id}/delete','LojaController@delete');
            // Regioes
            Route::get('/regiao','RegiaoController@index');
            Route::get('/regiao/create','RegiaoController@create');
            Route::post('/regiao/create','RegiaoController@store');
            Route::get('/regiao/{id}','RegiaoController@edit');
            Route::post('/regiao/{id}','RegiaoController@update');
            Route::get('/regiao/{id}/delete','RegiaoController@delete');
            Route::get('/regiao/{id}/bairro','RegiaoController@bairro');
            Route::post('/regiao/{id}/bairro','RegiaoController@bairroStore');
            Route::get('/regiao/{regiao_id}/bairro/{bairro_id}/delete','RegiaoController@bairroDelete');
            // Frete
            Route::get('/frete','FreteController@index');
            Route::get('/frete/create','FreteController@create');
            Route::post('/frete/create','FreteController@store');
            Route::get('/frete/{id}','FreteController@edit');
            Route::post('/frete/{id}','FreteController@update');
            Route::get('/frete/{id}/delete','FreteController@delete');
            Route::get('/frete/{id}/rota','FreteController@rotaCreate');
            Route::post('/frete/{id}/rota','FreteController@rotaStore');

            //peca
            Route::get('/peca','PecaController@index');
            Route::get('/peca/create','PecaController@create');
            Route::post('/peca/store','PecaController@store');
            Route::get('/peca/{id}/edit','PecaController@edit');
            Route::post('/peca/{id}/update','PecaController@update');
            Route::get('/peca/{id}/destroy','PecaController@destroy');
            Route::post('/peca/familia','PecaController@familia');

            //familia
            Route::get('/familia','FamiliaController@index');
            Route::get('/familia/create','FamiliaController@create');
            Route::post('/familia/store','FamiliaController@store');
            Route::get('/familia/{id}/edit','FamiliaController@edit');
            Route::post('/familia/{id}/update','FamiliaController@update');
            Route::get('/familia/{id}/destroy','FamiliaController@destroy');

            //pacote
            Route::resource('/pacote', 'PacoteController');
            Route::get('/pacote/{id}/adicionar-peca', 'PacoteController@addpeca');
            Route::post('/pacote/{id}/adicionar-peca', 'PacoteController@storepeca');

            //Ideologica
            Route::get('/ideologica', 'IdeologicaController@consultapeca');
            
        }));
        
    }
    else
    {
        Route::group(['namespace'=>'Site'],function(){

            Route::get('/', 'CleanController@index');
            Route::get('/cesto', 'CleanController@cesto');
            Route::get('/cesto-customizado', 'CleanController@cestocustomizado');
        });
    }
}




