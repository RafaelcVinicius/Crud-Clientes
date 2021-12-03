@extends('layouts.style')

@section('Conteudo')
<H3>Produto</H3>
<li>
Nome: {{ $produto['nome'] }} || id: {{ $produto['id'] }}
</li>    
@endsection