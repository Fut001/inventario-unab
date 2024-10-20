<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MarcaController extends Controller
{
    public function index()
    {
        
        $response = Http::get('http://31.220.97.169:5000/api/marca');
        if ($response->successful()){
            $marcas = $response->json();
            return view('marcas.show', ['Marcas' => $marcas]);
        }
    }

    public function show($id)
{

    $response = Http::get("http://31.220.97.169:5000/api/marca/{$id}");
    
    if ($response->successful()) {
        $marca = $response->json();
        return view('marcas.show', ['marca' => $marca]);
    } else {
        return response()->json(['error' => 'Error al obtener la marca'], 500);
    }
}
}

