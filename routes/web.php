<?php

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

*/

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
    return redirect('redirecionar2') ;
});
Route::get('redirecionar2', function () {
    return 'Página redirecionada com sucesso!';
});


