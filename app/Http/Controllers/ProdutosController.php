<?php

namespace App\Http\Controllers;

use App\produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index()
    {
        $dados = produtos::all();
        return view('home', compact('dados'));
    }

  
    public function create()
    {
        return view('home_new');
    }

  
    public function store(Request $request)
    {
        $produto = new produtos;
        $produto->nome =$request->text_nome;
        $produto->obs =$request->text_obs;
        $produto->corredor =$request->text_corredor;
        $produto->prateleira =$request->text_plateleira;
        $produto->lado =$request->text_lado;
        $produto->save();
         
        return redirect ('/');
    }

  
    public function show(produtos $produtos)
    {
        //
    }

    public function edit(produtos $produtos)
    {
        //
    }

 
    public function update(Request $request, produtos $produtos)
    {
        //
    }

    public function destroy(produtos $produtos)
    {
        //
    }

    public function search(Request $request)
    {
        add($request->all());
    }
    
}
