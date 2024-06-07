<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recargas extends Model
{
    use HasFactory;
    protected $table = 'recargas';
    //atributos: id, idextintor, fecha, proximarecarga
    protected $fillable = [
        'extintores_id',
        'fecha',
        'proximarecarga',
    ];
}
