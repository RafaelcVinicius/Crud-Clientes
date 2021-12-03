@extends('layouts.style')

@section('Conteudo')
<div class="corpo">
    <div class="menu">
        <a class="btn criar" href="{{ route('produtos.create')}}">Criar</a>

        <h3 class="titulo">Todos os Produtos</h3>
    </div>
    <div class="clientes">
        @foreach ($produtos as $pro)
            <li >
            <div class="cliente">
                <div class="dados">
                   ID: {{$pro['id'] }} || {{$pro['nome'] }} || R$ {{$pro['valor'] }}
                </div> 
                <div class="btn-div">
                    <a class="btn" href="{{route('produtos.edit', $pro['id'])}}">Editar</a> 
                    <a class="btn"  href="{{route('produtos.show', $pro['id'])}}">Info</a> 
                    <form action="{{route('produtos.destroy', $pro['id'])}}" method="POST">
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



