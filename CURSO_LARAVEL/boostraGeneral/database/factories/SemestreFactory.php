<?php

namespace Database\Factories;
use App\Models\Semestre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Semestre>
 */
class SemestreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $variableSemestre = 2022;
        $numberbetween = $this->faker->numberBetween(1,12);
        return [
            'semestre' => $variableSemestre . $numberbetween,
            'fechInicio' => $this->faker->date(),
            'fechFinal' => $this->faker->now(),
        ];
    }
}
