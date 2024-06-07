<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('extintores', function (Blueprint $table) {
            $table->id();
            $table->integer('capacidad');
            $table->date('fechafabricacion');
            $table->enum('estado',['Nuevo', 'Viejo']);
            //relaion con el tipo
            $table->unsignedBigInteger('tipos_id');
            $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('cascade');
            //relacion con la ubiccacion
            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacion')->onDelete('cascade');
            //relacion con el proveedor
            $table->unsignedBigInteger('proveedores_id');
            $table->foreign('proveedores_id')->references('id')->on('proveedores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extintores');
    }
};
