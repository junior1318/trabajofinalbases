<?php

namespace App\Http\Controllers;

use App\Models\tipos;
use Illuminate\Http\Request;

class tiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response ()->json([
            'data'=>tipos::all()
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
        $tipo = tipos::create($request->all());
        return response ()->json([
            'message' =>'tipo creado correctamente',
            'data'=>$tipo
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response ()->json([
            'data'=>tipos::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipos $tipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tipos $tipos)
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
            $tipo = tipos::find($id);
            $tipo->delete();
            return response()->json([
                'message' => 'tipo eliminado correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al eliminar el tipo'
            ]);
        }
    }
}
