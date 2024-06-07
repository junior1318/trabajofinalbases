<?php

namespace App\Http\Controllers;

use App\Models\proveedores;
use Illuminate\Http\Request;

class proveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response ()->json([
            'data'=>proveedores::all()
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
        $proveedor = proveedores::create($request->all());
        return response ()->json([
            'message' =>'proveedor creado correctamente',
            'data'=>$proveedor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response ()->json([
            'data'=>proveedores::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proveedores $proveedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $proveedor = proveedores::find($id);
            $proveedor->delete();
            return response()->json([
            'message' =>'proveedor eliminado correctamente'
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>'proveedor no encontrado'
            ]);
        }
    }

    public function extintores(string $id)
    {
        $proveedores = proveedores::with('Extintores')->find($id);
        return response()->json([
            'data'=>$proveedores->extintores
        ]);
    }
}