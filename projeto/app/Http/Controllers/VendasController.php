<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venda;
class VendasController extends Controller
{
    public function index()
    {
        return venda::all();
    }

    public function show(Venda $venda)
    {
        return venda::find($id);
    }

    public function store(Request $request)
    {
        $venda = venda::create($request->all());

        return response()->json(['mensagem' => 'Venda cadastrada com sucesso!'], 201);
    }

    public function update(Request $request, $id)
    {
        $venda = venda::findOrFail($id);
        $venda->update($request->all());

        return response()->json(['mensagem' => 'Venda alterada com sucesso!'], 200);
    }

    public function delete($id)
    {
        $venda = venda::find($id); 
        $venda->delete();

        return response()->json(['mensagem' => 'Venda excluída com sucesso!'], 204);
    }
}
