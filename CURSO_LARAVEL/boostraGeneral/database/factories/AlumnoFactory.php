<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Alumno::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'apellido' => $this->faker->sentence(),
            'edad' => $this->faker->numberBetween(18,50),
            'dni' => '75370143',
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => '987456123',
            'bloque_id' => $this->faker->numberBetween(1,4),
            'actitud_id' => $this->faker->numberBetween(1,4),
            'semestre' =>  $this->faker->sentence(),
            'mes' => $this->faker->sentence(),
        ];
    }
}
