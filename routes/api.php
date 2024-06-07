<?php

use App\Http\Controllers\extintoresController;
use App\Http\Controllers\inspeccionesController;
use App\Http\Controllers\proveedoresController;
use App\Http\Controllers\recargasController;
use App\Http\Controllers\tiposController;
use App\Http\Controllers\ubicacionController;
use App\Models\extintores;
use App\Models\inspecciones;
use App\Models\proveedores;
use App\Models\recargas;
use App\Models\tipos;
use App\Models\ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ubicacion/{ubicacion}/extintores', [ubicacionController::class, 'extintores']);//listo
Route::get('/proveedores/{proveedor}/extintores', [proveedoresController::class, 'extintores']);
Route::get('/tipos/{tipo}/extintores', [tipos::class, 'extintores']);
Route::get('/extintores/{extintor}/inspecciones', [extintoresController::class, 'inspecciones']);//listo
Route::get('/extintores/{extintore}/recargas', [extintoresController::class, 'recargas']);//listo



Route::apiResources([
    'ubicacion' => ubicacionController::class,
    'proveedores' => proveedoresController::class,
    'tipos' => tiposController::class,
    'extintores' => extintoresController::class,
    'inspecciones' => inspeccionesController::class,
    'recargas' => recargasController::class,
]);
