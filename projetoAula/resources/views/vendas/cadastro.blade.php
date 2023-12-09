@extends('layouts.app')
@section('venda.cadastro')
<h1> Cadastro de Vendas</h1>

<form action="{{ Route('vendas.novo') }}" method="post">

    @csrf

    <section name="id_usuario" id="" class="form-control">
        @foreach($usuarios as $usuario)
        <option value="{{ $usuario->id }}">{{ $usuario->nome }}</option>
        @endforeach
    </section>
    <input type="number" name="valor" class="form-control" id="">
    <button class="btn btn-success"> Enviar</button>
</form>
@endsection
