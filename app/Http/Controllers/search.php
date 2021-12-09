<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class search extends Controller
{
    //


    public function indexjson()
    {
        $produtos = Produtos::all();

       return json_encode($produtos);

    }

    public function pesquisar()
    {$dados = 'i';
        $produtos = Produtos::where("nome", "like", "%$dados%")->get(['id', 'nome']);
       return json_encode($produtos);

    }
}
