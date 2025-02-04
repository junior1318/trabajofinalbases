<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inspecciones extends Model
{
    use HasFactory;
    protected $table = 'inspecciones';
    //atributos: id, idextintor, fecha, proximainspeccion
    protected $fillable = [
        'extintores_id',
        'fecha',
        'proximainspeccion',
    ];

    public function extintor()
    {
        return $this->belongsTo(extintores::class);
    }

}
