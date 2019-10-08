<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        return Funcionaios::all();
    }

    public function show(Funcionarios $funcionarios)
    {
        return $funcionarios;
    }

    public function store(Request $request)
    {
        $funcionarios = Funcionarios::create($request->all());

        return response()->json($funcionarios, 201);
    }

    public function update(Request $request, $id)
    {
        $funcionarios = Funcionarios::findOrFail($id);
        $funcionarios->update($request->all());

        return response()->json($funcionarios, 200);
    }

    public function delete(Request $request, $id)
    {
        $funcionarios = Funcionarios::findOrFail($id);
        $funcionarios->delete();

        return response()->json(null, 204);
    }
}
