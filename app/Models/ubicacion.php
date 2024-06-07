<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    use HasFactory;
    
    protected $table = 'ubicacion';
    protected $fillable = [
        'nombre',
    ];

    public function Extintores()
    {
        return $this->hasMany(extintores::class);
    }

    
}
