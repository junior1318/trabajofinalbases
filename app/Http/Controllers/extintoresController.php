<?php

namespace App\Http\Controllers;

use App\Models\extintores;
use Illuminate\Http\Request;

class extintoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json([
            'data'=>extintores::all()
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
        $extintor = extintores::create($request->all());
        return response()->json([
            'message' =>'extintor creado correctamente',
            'data'=>$extintor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json([
            'data'=>extintores::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(extintores $extintores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, extintores $extintores)
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
            $extinttor = extintores::find($id);
            $extinttor->delete();
            return response()->json([
            'message' =>'extintor eliminado correctamente'
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>'extintor no encontrado'
            ]);
        }
    }


    public function recargas(string $id){
        $extintor = extintores::with('Recargas')->find($id);
            return response()->json([
                'recargas' => $extintor->recargas
            ]);
    }


    public function inspecciones(string $id){
        $extintor = extintores::with('Inspecciones')->find($id);
            return response()->json([
                'inspecciones' => $extintor->inspecciones
            ]);
    }
}
