<?php

namespace App\Http\Controllers;

use App\noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
 
    public function index()
    {
        $dados = noticias::all();
        return view('noticias', compact('dados'));
    }

    public function create()
    {
        return view('noticias_new');
    }


    public function store(Request $request)
    {
       $noticia = new noticias;
       $noticia->titulo =$request->text_titulo;
       $noticia->testo =$request->text_texto;
       $noticia->autor =$request->text_autor;
       $noticia->save();
        
       return redirect ('noticias/create');
    }

  
    public function show($id)
    {
        return noticias::where('id', $id)->get();
    }

  
    public function edit(noticias $noticias)
    {
        //
    }


    public function update(Request $request, noticias $noticias)
    {
        //
    }

  
    public function destroy(noticias $noticias)
    {
        //
    }
}
