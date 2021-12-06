@extends('layouts.style')

@section('Conteudo')
<div class="corpo">
    <div class="menu">
        <a class="btn criar" href="{{ route('vendas.create')}}">Criar</a>

        <h3 class="titulo">Todos os Vendas</h3>
    </div>
    <div class="clientes">
        @foreach ($vendas as $venda)
            <li >
                <div class="cliente">
                    <div class="dados">
                       ID: {{$venda['id']}} || Cliente:  {{$venda->cliente['nome']}} || 
                       Valor: R$ {{$venda['valor']}} || Status: {{$venda['status']}}
                    </div> 
                    <div class="btn-div">
                        @if($venda['status'] == 'FINALIZADO')
                        <a class="btn"  href="{{route('vendas.show', $venda['id'])}}">Info</a> 
                        @else
                        <a class="btn"  href="{{route('vendas.show', $venda['id'])}}">Info</a> 
                        <a class="btn" href="{{route('vendas.edit', $venda['id'])}}">Editar</a>
                        <form action="{{route('vendas.destroy', $venda['id'])}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input class="btn"  type="submit" value="Deletar">
                            </form>   
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </div>    
</div>
@endsection



