@extends('templates.conta_template')
@section('title', 'Cadastro')

@section('content')
<div class="row">
<form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">Nome Completo</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Data de Nascimento Ex: dia/mês/ano</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="num_conta" type="text" class="validate">
          <label for='num_conta'> Nº da Conta</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Crie sua senha com seis digitos</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Informe seu endereço de Email</label>
        </div>
      </div>
      </div>
    </form>
</div>
@endsection