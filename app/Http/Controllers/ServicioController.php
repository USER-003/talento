<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.servicio', compact('servicios'));
    }

    public function datos()
    {
        $servicios = Servicio::all();
        return view('index', compact('servicios'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Convertir categoria_id a un número entero

        $request->merge(['categoria_id' => intval($request->categoria_id)]);
        // Crear el nuevo registro de servicio
        $servicio = Servicio::create($request->all());

        // Redirigir a la página de índice de servicios
        return redirect()->route('servicio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $servicio->update($request->all());

        return redirect()->route('servicio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return back();
    }
}
