<?php

namespace App\Http\Controllers;


use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProdutosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::consultar();
    
        return view('Produtos.produtos')
        ->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Produtos.criarproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bd = new Produtos();
        $bd->id_user = auth::id();
        $bd->nome = $request->input('nome');
        $bd->valor = $request->input('valor');;
        $bd->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produtos::where('id', $id)->first();

        return view('Produtos.info')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produtos::where('id', $id)->first();

        return view('Produtos.edit')->with('produto', $produto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $produto = Produtos::find($id);
            $produto->nome = $request->input('nome');
            $produto->save();

           return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Produtos::find($id);    
        $test->delete();               
        return redirect()->route('produtos.index'); 
    }
}
