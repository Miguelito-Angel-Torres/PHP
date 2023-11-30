<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curriculare>
 */
class CurriculareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $variablecod = 'DE';
        $numberbetween = $this->faker->numberBetween(18,50);
        $str_random = ucwords(Str::random(2));
        return [
            'codCurso' => $variablecod . $str_random . $numberbetween,
            'nomCurso' => $this->faker->sentence(),
            'especialidad' => "M3",
            'sisEvaluacion' => $this->faker->randomElement(['D','G','F']),
            'horTeoria' => $this->faker->numberBetween(0,4),
            'horPractica' => $this->faker->randomElement([0,2]),
            'horLaboratorio' => $this->faker->randomElement([0,2,4]),
            'creditos' => $this->faker->numberBetween(1,5),
            'preRequisitos' => $this->faker->randomElement(['NINGUNO','BMA01','MC101','MB700']),
            'ciclo' => $this->faker->numberBetween(1,2),
            'verCurricular' => 20182

        ];
    }
}
