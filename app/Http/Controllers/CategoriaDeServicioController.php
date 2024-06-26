<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\CategoriasDeServicio;

use Illuminate\Http\Request;

class CategoriaDeServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categorias = CategoriasDeServicio::all();
        $servicios = Servicio::all();
        return view('index', compact('categorias','servicios'));
    }

    public function tech()
    {   
        $categorias = CategoriasDeServicio::all();
        $servicios = Servicio::all();
        return view('categorias.tech', compact('categorias','servicios'));
    }

    public function leyes()
    {   
        $categorias = CategoriasDeServicio::all();
        $servicios = Servicio::all();
        return view('categorias.leyes', compact('categorias','servicios'));
    }
    
    public function educacion()
    {   
        $categorias = CategoriasDeServicio::all();
        $servicios = Servicio::all();
        return view('categorias.educacion', compact('categorias','servicios'));
    }

    public function negocios()
    {   
        $categorias = CategoriasDeServicio::all();
        $servicios = Servicio::all();
        return view('categorias.negocios', compact('categorias','servicios'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
