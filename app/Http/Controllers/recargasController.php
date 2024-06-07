<?php

namespace App\Http\Controllers;

use App\Models\recargas;
use Illuminate\Http\Request;

class recargasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response ()->json([
            'data'=>recargas::all()
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
        $recarga = recargas::create($request->all());
        return response ()->json([
            'message' =>'recarga creada correctamente',
            'data'=>$recarga
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response ()->json([
            'data'=>recargas::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recargas $recargas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, recargas $recargas)
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
            $recarga = recargas::find($id);
            $recarga->delete();
            return response()->json([
            'message' =>'recarga eliminado correctamente'
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>'recarga no encontrado'
            ]);
        } 
    }
}
