<?php

namespace Database\Factories;
use App\Models\Actitude;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actitude>
 */
class ActitudeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Actitude::class;
    public function definition()
    {
        return [
            'actitud' => $this->faker->randomElement(['Tardanza','Puntual','Falta','Justificacion']),
        ];
    }
}
