@extends('layouts.style')

@section('Conteudo')
<H3>Produto</H3>
<form action="{{route('produtos.update', $produto['id'] )}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nome" value="{{$produto['nome']}}">
    <input type="text" name="valor" value="{{$produto['valor']}}">
    <input type="submit" value="Salvar">
</form>
@endsection