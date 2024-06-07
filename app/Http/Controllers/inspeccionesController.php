<?php

namespace App\Http\Controllers;

use App\Models\inspecciones;
use Illuminate\Http\Request;

class inspeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json([
            'data'=>inspecciones::all()
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
        $inspeccion = inspecciones::create($request->all());
        return response()->json([
            'message' =>'inspeccion creada correctamente',
            'data'=>$inspeccion
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json([
            'data'=>inspecciones::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inspecciones $inspecciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inspecciones $inspecciones)
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
            $inspeccion = inspecciones::find($id);
            $inspeccion->delete();
            return response()->json([
            'message' =>'extintor eliminado correctamente'
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>'extintor no encontrado'
            ]);
        }
    }
}
