<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Categoria;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->name();
        return [
            'nome' => $name,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomFloat(2, 0, 1000),
            'slug' => Str::slug($name),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),
            'imagem' => $this->faker->imageUrl(400, 400, 'animals', true),
        ];
    }
}
