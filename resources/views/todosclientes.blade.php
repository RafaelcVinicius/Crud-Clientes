@extends('layouts.style')

@section('Conteudo')
<div class="corpo">

        <a href="{{ route('clientes.create')}}">Criar</a>

        <h3>Todos os Clientes</h3>
    <div class="clientes">
        @foreach ($cliente as $cli)
            <li >
            <div class="cliente">
                <div class="dados">
                    {{$cli['id'] }} || {{$cli['nome'] }}
                </div> 
                <div class="btn-div">
                    <a class="btn" href="{{route('clientes.edit', $cli['id'])}}">Editar</a> 
                    <a class="btn"  href="{{route('clientes.show', $cli['id'])}}">Info</a> 
                    <form action="{{route('clientes.destroy', $cli['id'])}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <input class="btn"  type="submit" value="Deletar">
                    </form>
                </div>
            </div>
            </li>
        @endforeach
    </div>    
</div>
@endsection



