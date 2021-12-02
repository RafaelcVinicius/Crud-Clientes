@extends('layouts.style')

@section('Conteudo')
<H3>Cliente</H3>
<form action="{{route('clientes.update', $cliente['id'] )}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nome" value="{{$cliente['nome']}}">
    <input type="submit" value="Salvar">
</form>
@endsection