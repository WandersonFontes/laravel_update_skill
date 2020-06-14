@extends('templates.conta_template')

@section('title', 'Transferências')


@section('content')
    <form>
        <label>Conta</label>
        <input type="number" placeholder="Nº da Conta">
        <label>Deposito</label>
        <input type="text" placeholder="Valor da Operação">
        <button class="waves-effect waves-light btn-small">Transferir<i class="material-icons left">check</i></button>
    </form>
@endsection

    