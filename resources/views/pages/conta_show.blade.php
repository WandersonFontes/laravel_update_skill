@extends('templates.conta_template')

@section('title', 'Contas')

@section('show')
    <table>
        <thead>
          <tr>
            <th>NOME</th>
            <th>CONTA</th>
            <th>SALDO</th>
            <th>OPÇÕES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $dev }}</td>
            <td>236997</td>
            <td>R$ 900.00</td>
            <td>
              <button class="waves-effect btn-small blue darken-1"><i class="material-icons">create</i></button>
              <button class="waves-effect btn-small red darken-1"><i class="material-icons">delete_sweep</i></button>
            </td>
          </tr>
        </tbody>
    </table>
@endsection