<?php

use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

/*
Route::verbo_HTTP('/', funcão_de_CALLBACK () {
    return view('nome_do_arquivo_blade.php');
});

Route::any('any', function () {
    return 'Funciona com qualquer tipo de verbo HTTP';
});

Route::match(['get','post'],'match', function () {
    return 'Definimos quais verbos HTTP poderm ser ultilizados';
});


Rotas com Parametros

Route::get('produto/id_produto', function ($id_produto) {
    return 'Funciona com qualquer tipo de verbo HTTP';
});

Route::get('produto/id_produto', function ($id_produto) {
    return 'Funciona com qualquer tipo de verbo HTTP';
});


Redirecionamento de Rotas

Route::get('redirecionar1', function () {
    return redirect('redirecionar2') ;
});
Route::get('redirecionar2', function () {
    return 'Página redirecionada com sucesso!';
});

ou

Route::redirect('/redirecionar1', '/redirecionar2');

Views

Route::get('view', function () {
    return redirect('redirecionar2') ;
});

Usando nome para referenciar Rotas

Route::get('nome', function (nome) {
    return redirect("Esse é o nome: {]") ;
});

*/

Route::get('/', function () {
    return view('welcome');
});

//Simplificação de Rota para views  
//Route::view('nome_da_url', 'welcome');
Route::get('view', function () {
    return view('welcome');
});


Route::get('teste', function () {
    return 'Teste de Rota';
});

//Funciona com qualquer tipo de verbo HTTP
Route::any('any', function () {
    return 'Funciona com qualquer tipo de verbo HTTP';
});
//Cuidado com uso pode colocar aplicação em risco!


Route::match(['get','post'],'match', function () {
    return 'Definimos quais verbos HTTP poderm ser ultilizados';
});


Route::get('produto/{nome}', function ($nome) {
    return "O produto é: {$nome}";
});

//implificação (Bem melhor!)
//Route::redirect('/redirecionar1', '/redirecionar2');
Route::get('redirecionar1', function () {
    return redirect()->route('test');
});
Route::get('redirecionar2', function () {
    return 'Página redirecionada com sucesso!';
});


Route::get('nome', function () {
    return 'Teste feito com sucesso!';
})->name('test');


//Grupos de rotas com auntenticação(middleware:auth)
Route::middleware([])->group(function(){
    //Prefixo para que a url fique: /ADMIN/financeiro
    //Caso presice alterar é somente mudar prefixo aqui!
    Route::prefix('admin')->group(function(){
        Route::get('home', function(){
            return 'Home Admin';
        });
        Route::get('financeiro', function(){
            return 'Finaceiro Admin';
        });
        Route::get('produto', function(){
            return 'Product Admin';
            
        });
        Route::get('controller', 'Admin\TestController@test');
        //Grupos para dirétorio de Controllers para não precisar ser declarado
        Route::namespace('Admin')->group(function(){
            Route::get('controller1', 'TestController1@test1');
            //Obs: Controller sem precisar declarar diretório ADMIN!
        });
    });
});

//Exemplo de Grupos mais limpo e simplificado
Route::group([
    'prefix' => 'admin',
    'middlware' =>[],
], function () {
    Route::get('config', function(){
        return 'Config Admin';
    });
});

//                                      ===>CRUD<===
//Rotas do Controller para testes
Route::get('conta', 'ContaController@index')->name('conta.index');//Listar contas
Route::get('conta/{id}', 'ContaController@show')->name('conta.show');//Exibir conta através do ID
Route::get('conta/create', 'ContaController@create')->name('conta.create');//Criar conta
Route::get('conta/{id}/edit', 'ContaController@edit')->name('conta.edit');//Editar Conta
//Rotas de Cadastro e edição de dados através de verbos Http
Route::post('conta/store', 'ContaController@store')->name('conta.store');//Verbo Post para cadastrar conta
//OBS:URL iguais! Podemos usar mesma URL apenas se os verbos Http forem diferentes 
Route::put('conta/{id}', 'ContaController@update')->name('conta.update');//Verbo Put para editar conta 
Route::delete('conta/{id}', 'ContaController@destroy')->name('conta.destroy');//Verbo Deleta para excluir conta

//Simplificação de todo esse código é usar rota RESOURCE
Route::resource('funcionario', 'Admin\FuncionarioController')->middleware('auth'); //Já irá gerenciar métodos pré definidos do Controller

//Rota de Login 
Route::get('login', function()
{
    return 'Login Funcionario';
})->name('login');


