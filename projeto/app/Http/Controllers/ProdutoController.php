<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function show($id)
    {
        return Produto::find($id);
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());

        return response()->json(['mensagem'=> 'Produto Cadastrado com sucesso!'], 201);
    }

    public function update(Request $request, $id)
    {
        $article = Produto::findOrFail($id);
        $article->update($request->all());

        return response()->json(['mensagem' => 'Produto alterado com sucesso!'], 200);
    }

    public function delete($id)
    {   
        $produto = Produto::find($id); 
        $produto->delete();

        return response()->json(['mensagem' => 'Produto excluído com sucesso!'], 204);
    }
}
