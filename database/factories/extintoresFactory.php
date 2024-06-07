<?php

namespace Database\Factories;

use App\Models\proveedores;
use App\Models\tipos;
use App\Models\ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\extintores>
 */
class extintoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'capacidad' => fake()->randomDigit(),
            'fechafabricacion' => fake()->date(),
            'estado' => fake()->randomElement(['Nuevo', 'Viejo']),
            'tipos_id'=> tipos::all()->random()->id,
            'ubicacion_id'=> ubicacion::all()->random()->id,
            'proveedores_id'=> proveedores::all()->random()->id,
        ];
    }
}
