<?php

namespace Database\Factories;

use \App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name'=> $name,
            'slug'=> Str::slug($name,'-'),
            'description'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
        ];
    }
}
