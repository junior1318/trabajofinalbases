<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    //atributod: id, nombre, telefono, correo
    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
    ];

    public function extintores()
    {
        return $this->hasMany(extintores::class);
    }
}
