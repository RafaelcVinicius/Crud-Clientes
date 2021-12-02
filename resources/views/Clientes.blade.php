@extends('layouts.style')

@section('Conteudo')

<form action="{{route( 'clientes.store' )}}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
</form>
@endsection