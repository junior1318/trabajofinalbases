<?php

namespace App\Http\Controllers;

use App\Models\extintores;
use App\Models\ubicacion;
use Illuminate\Http\Request;

class ubicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response ()->json([
            'data'=>ubicacion::all()
        ]);
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
        $ubicacion = ubicacion::create($request->all());
        return response ()->json([
            'message' =>'ubicacion creada correctamente',
            'data'=>$ubicacion
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response ()->json([
            'data'=>ubicacion::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ubicacion $ubicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ubicacion $ubicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $ubicacion = ubicacion::find($id);
            $ubicacion->delete();
            return response()->json([
                'message' => 'ubicacion eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al eliminar la ubicacion'
            ]);
        }
    }


    public function extintores(string $id){
        $ubicacion = ubicacion::with('Extintores')->find($id);
            return response()->json([
                'inspecciones' => $ubicacion->extintores
            ]);
    }
}
