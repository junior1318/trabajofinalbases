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
        Schema::create('inspecciones', function (Blueprint $table) {
            $table->id();
            //relacion con el extintor
            $table->unsignedBigInteger('extintores_id');
            $table->foreign('extintores_id')->references('id')->on('extintores')->onDelete('cascade');
            $table->date('fecha');
            $table->date('proximainspeccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspecciones');
    }
};
