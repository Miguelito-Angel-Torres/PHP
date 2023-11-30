<?php

namespace Database\Factories;
use App\Models\Curso;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // Hacer referencia al Model:
    protected $model = Curso::class;

    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            // metodo faker para llenar la columna
            // sentence():hace referencia que se llene la columna con una oracion.
            // paragraph(): hace referencia que se llene la columna con parrafo.
            'name' => $name,
            'slug'=> Str::slug($name,'-'),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Desarrollo Web','Diseño Web']),
        ];
    }
}
