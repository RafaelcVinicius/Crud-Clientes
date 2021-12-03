@extends('layouts.index')

@section('Conteudo')
<div class="corpo">

    <div class="cliente">
        <a href="{{route('clientes.index')}}" class="cliente">Clientes</a>
    </div>
    <div class="produto">
        <a href="{{route('produtos.index')}}" class="produto">Produto</a>
    </div>
    <div class="vender">
        <a href="{{route('vendas.index')}}" class="vender">Vender</a>
    </div>
</div>
@endsection