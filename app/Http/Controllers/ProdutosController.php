<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller

{
    public function index()
    {
        return Produtos::all();
    }

    public function show(Produtos $produtos)
    {
        return $produtos;
    }

    public function store(Request $request)
    {
        $produtos = Produtos::create($request->all());

        return response()->json($produtos, 201);
    }

    public function update(Request $request, $id)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->update($request->all());

        return response()->json($produtos, 200);
    }

    public function delete(Request $request, $id)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->delete();

        return response()->json(null, 204);
    }
}
