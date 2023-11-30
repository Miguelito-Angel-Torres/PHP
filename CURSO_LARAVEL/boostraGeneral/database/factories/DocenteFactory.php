<?php

namespace Database\Factories;


use App\Models\Docente;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Docente::class;
    public function definition()
    {
        $variablecod = 'AB';
        $numberbetween = $this->faker->numberBetween(18,50);
        $str_random = ucwords(Str::random(2));
        return [
            'codDocente' => $variablecod . $str_random . $numberbetween,
            'apePaterno' => $this->faker->lastName(),
            'apeMaterno' => $this->faker->lastName(),
            'nombres' => $this->faker->firstName() ." ". $this->faker->firstName(),
            
        ];
    }
}
