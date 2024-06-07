<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extintores extends Model
{
    use HasFactory;
    protected $table = 'extintores';
    //atributos: id, capacidad, fechafabricacion, estado, idtipo, idubicacion, idproveedor
    protected $fillable = [
        'capacidad',
        'fechafabricacion',
        'estado',
        'tipos_id',
        'ubicacion_id',
        'proveedores_id',
    ];

//relaciones en las consultas
    public function tipo()
    {
        return $this->belongsTo(tipos::class);
    }

    public function Ubicacion()
    {
        return $this->belongsTo(ubicacion::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(proveedores::class);
    }

    public function Inspecciones()
    {
        return $this->hasMany(inspecciones::class);
    }

    public function Recargas()
    {
        return $this->hasMany(recargas::class);
    }
}
