@extends('layouts.style')

@section('Conteudo')
<H3>Cliente</H3>
<li>
Nome: {{ $cliente['nome'] }} || id: {{ $cliente['id'] }}
</li>    
@endsection