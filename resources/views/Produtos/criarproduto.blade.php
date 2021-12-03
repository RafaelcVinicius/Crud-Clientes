@extends('layouts.style')

@section('Conteudo')

<form action="{{route( 'produtos.store' )}}" method="POST">
    @csrf
    <label for="nome">Nome:</label><input id="nome" type="text" name="nome">
    <label for="valor">Valor:</label><input id="valor" type="text" name="valor">
    <input type="submit" value="Salvar">
</form>
@endsection