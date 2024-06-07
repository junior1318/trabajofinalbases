<?php

namespace Database\Factories;

use App\Models\extintores;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inspecciones>
 */
class inspeccionesFactory extends Factory
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
            'extintores_id' => extintores::all()->random()->id,
            'fecha' => fake()->date(),
            'proximainspeccion' => fake()->date(),
        ];
    }
}
