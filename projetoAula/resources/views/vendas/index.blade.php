@extends('layout.app')
@section('vendas.conteudo')
<h1> Lista de Vendas do Usuario {{ $usuario->nome }}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th># Venda </th>
                <th> Valor </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuario->vendas as $venda)
            <tr>
                <td> {{ $venda->id }} </td>
                <td> {{ $venda->valor }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> @endsection
