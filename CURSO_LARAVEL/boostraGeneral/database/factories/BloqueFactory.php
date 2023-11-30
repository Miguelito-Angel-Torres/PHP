<?php

namespace Database\Factories;
use App\Models\Bloque;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bloque>
 */
class BloqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Bloque::class;

    public function definition()
    {
        return [
            'bloque' => $this->faker->randomElement(['A-123','B-123','C-123','D-123']),
        ];
    }
}
