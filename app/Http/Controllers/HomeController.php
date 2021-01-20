<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $estados = Estado::all();

        return view('index', compact('estados'));
    }

    // Requisição AJAX
    public function carregarMunicios(Request $request)
    {
        $estado = Estado::find($request->estado);

        // Retorna todos os municípios de um estado
        return response()->json($estado ? $estado->municipios : []);
    }
}
