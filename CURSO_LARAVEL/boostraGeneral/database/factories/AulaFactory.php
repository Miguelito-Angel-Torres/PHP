<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aula;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $variablecod = 'BC';
        $numberbetween = $this->faker->numberBetween(18,50);
        $str_random = ucwords(Str::random(2));

        return [
            'codAula' => $variablecod . $str_random . $numberbetween,
            'capacidad' => $this->faker->numberBetween(20,50),
            'tipSilla' => $this->faker->sentence(),
            'tipEntrada' =>$this->faker->sentence(),
            'taburete' => $this->faker->numberBetween(20,50),
            'tipPizarra' => $this->faker->sentence(),
            'proyector' => $this->faker->numberBetween(0,8),
            'pcAlumno' => $this->faker->numberBetween(10,60),
            'pcDocente' => $this->faker->numberBetween(1,5),
            'canPuertas' => $this->faker->numberBetween(1,3),
            'equVentilacion' => $this->faker->numberBetween(1,5),
            'observacion' => $this->faker->paragraph()
            

        ];
    }
}
