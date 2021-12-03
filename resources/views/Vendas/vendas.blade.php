@extends('layouts.style')

@section('Conteudo')
<div class="corpo">
    <div class="menu">
        <a class="btn criar" href="{{ route('produtos.create')}}">Criar</a>

        <h3 class="titulo">Todos os Vendas</h3>
    </div>
    <div class="clientes">
        @foreach ($Vendas as $ven)
            <li >
            <div class="cliente">
                <div class="dados">
                   ID: {{$ven['id'] }} || {{$ven['id_cliente'] }} || R$ {{$ven['valor'] }}
                </div> 
                <div class="btn-div">
                    <a class="btn"  href="{{route('vendas.show', $ven['id'])}}">Info</a> 
                </div>
            </div>
            </li>
        @endforeach
    </div>    
</div>
@endsection



