@extends('layouts.style')

@section('Conteudo')

<h3>Caixa Livre</h3>


<form action="{{route('vendas.store')}}" method="POST">
@csrf
<label for="clientes"> Clientes: </label>

<select name="clientes" id="clientes">
    @foreach ($clientes as $cliente)
    <option value="{{$cliente['id']}}">{{$cliente['nome']}}</option>
    @endforeach
</select><br>

<label for="produtos">produtos</label>
@for($a = 0; $a < $b =2; $a++)
    <div id="select">
        <select name="produtos" id="produtos">
            @foreach ($produtos as $produto)
            <option value="{{$produto['id']}}">{{$produto['nome']}}</option>
            @endforeach
        </select>
    </div>
@endfor

<Button type="button" id="produto">mais</Button>


<input type="submit" value="ABERTO">
<input type="submit" value="FINALIZADO">
</form>

<script>
 document.getElementById('produto').addEventListener('click', function() {


       console.log('produto');
    });


    /*
    let timer, corAtual;
    function resetar() {
        corAtual = 'white';
        document.body.style.backgroundColor = corAtual;
        clearInterval(timer);
    }
    function mudarCor() {
        switch(corAtual) {
            case 'white':
                corAtual = 'red'
                break
            case 'red':
                corAtual = 'green'
                break
            case 'green':
                corAtual = 'blue'
                break
            case 'blue':
                corAtual = 'pink'
                break                      
            case 'pink':
                corAtual = 'white'
                break        
            default:
                corAtual = 'white'
        }
        console.log(corAtual)
        document.body.style.backgroundColor = corAtual
    }
    document.getElementById('iniciar').addEventListener('click', function() {
        timer = setInterval(() => {
            mudarCor()
        }, 2000)
    });
    document.getElementById('parar').addEventListener('click', function() {
        resetar()
    });
    window.addEventListener('load', function() {
        resetar()
    });*/
</script>
@endsection
