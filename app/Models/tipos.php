<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
    use HasFactory;
    protected $table = 'tipos';
    //atributos: id, nombre
    protected $fillable = [
        "nombre",
    ];

    public function extintores()
    {
        return $this->hasMany(extintores::class);
    }
}
