<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller//Métodos para gerenciar CRUD recomendado pela comunidade LARAVEL
{
    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        //$this->middleware('auth')->only([
        //    'create','edit','delete','show'
        //]);
    }

    public function index()//Método para apresentar ou listar contas
    {
        //$contas=['wandev'];
        return view('pages.conta_index',[
            'dev' => '<h1>Wanderson Developer</h1>',
            'email' => '<h1>wancf19@gmail.com</h1>'
        ]);
    }
    public function show($id)//Método para exibir um dado específico através do ID
    {
         return view('pages.conta_show',[
            'dev' => 'Wanderson Fontes',
            'email' => '<h1>wancf19@gmail.com</h1>',
            'lista'=> [1,2,3,4,5]
        ]);
    }
    public function create()//Método para criar de contas
    {
        return 'Cadastar CONTA';
    }
    public function edit($id)//Método para editar de contas
    {
        return "Editar CONTA: {$id}";
    }
    public function store()//Método para cadastrar de contas
    {
        return 'Cadastro CONTA';
    }
    public function update($id)//Método para salvar edições em contas
    {
        return 'Salvar edição CONTA';
    }
    public function delete($id)//Método para deletar de conta
    {
        return 'Deletar CONTA';
    }
}
