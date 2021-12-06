@extends('layouts.style')

@section('Conteudo')
 
{{$venda['id']}} || {{ $venda->cliente['nome']}} || {{$venda['valor']}} || {{$venda['status']}}

<H3>Produtos</H3>
@foreach ($itens as $item) 
    <li>
        {{$item->produto['nome']}} || {{$item['valor']}} || {{$item['qtde']}} 
    </li>
@endforeach

@endsection