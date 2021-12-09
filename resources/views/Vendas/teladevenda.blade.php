@extends('layouts.style')

@section('Conteudo')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/vue@next"></script>

<h3>Caixa Livre</h3>


<form action="{{route('vendas.store')}}" method="POST">
@csrf
<label for="clientes"> Clientes: </label>

<select name="clientes" id="clientes">
    @foreach ($clientes as $cliente)
    <option value="{{$cliente['id']}}">{{$cliente['nome']}}</option>
    @endforeach
</select><br>


<H3>prod</H3>

<div id="corpo">
    <div id="topo">
        <div class="center">
            <form>
                <input type="text" name="search" autocomplete="off">
            </form>
            <div id="results">
                
            </div>
        </div>
    </div>
    <div id="content">
    </div>
</div>



<div id="dados">
<H3>produtos</H3>

</div>




<input type="submit" value="FINALIZADO">
</form>


<script>


//pesquisar os produtos


$(document).ready(function(){
	$('.center input').keyup(function(){
		var words = $('input').val();

		if (words != '') {

			$.ajax({
				'url' : '/api/json',
				'method' : 'GET',
				'dataType' : 'json',
				'data' : {s : words}
			})

            
            function dados(){
            for(i=0; i < words.length; i++){
                words = '<input type="checkbox" value="' + words.nome + '" id="' + words.id + '"> <label for="' + words.id +  '"> '+ words[i].nome +' </label>';
           
        $('#results').append(words);
       }
    }
       $(function(){
             dados();
        })

       
			/*.done(function(response){
				$('.results').html('');
				
				$.each(response, function(key, val){
					$('.results').append('<div class="item">' + val + '</div>');
				});
			})
			.fail(function(){
				$('.results').html('');
			});
			

		            } else {
			$('.results').html('');*/
        }
	});
});







//carega os produtos via ajax

function caregar(){
  $.getJSON('/api/json', function(data){
       
       for(i=0; i < data.length; i++){
           dados = '<input type="checkbox" value="' + data[i].nome + '" id="' + data[i].id + '"> <label for="' + data[i].id +  '"> '+ data[i].nome +' </label>';
           
                    
        $('#dados').append(dados);
       }
    });
}

$(function(){
    caregar();
})
    </script>
@endsection
