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
                            <input type="text" name>
                            <input class="btn"  type="submit" value="Deletar">
                            </form>   
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </div>    
</div>

<script>

const MyNameApp = {
    data() {
        return{
            nome: "",
            idade: 30,
            input_name: ""
        }
    },
    methods: {
        submitForm(e) {
            e.preventDefault();

            console.log(this.input_name);

            this.nome =this.input_name;
        }
    }
}

Vue.createApp(MyNameApp).mount("#app");</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
@endsection



