<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Produtos;
use Illuminate\Http\Request;
use App\Models\Vendas;

class VendasController extends Controller

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
        $vendas = Vendas::get();
        $vendas;

        return view('Vendas.vendas')
        ->with('vendas', $vendas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $np = Produtos::get()->count();
        $produtos = Produtos::get();
        $clientes = Clientes::get();

       
        return view('Vendas.teladevenda')
        ->with('produtos', $produtos)->with('clientes', $clientes)->with('np', $np);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$produto = Produtos::get()->count();
        $produto['n'] = 'eeee';
        echo json_encode($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $venda = Vendas::find($id);
      $itens = $venda->itens;  
      return view('Vendas.info')->with('venda', $venda)->with('itens', $itens);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
