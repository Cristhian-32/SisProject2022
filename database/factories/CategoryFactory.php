<?php

namespace Database\Factories;

use Dotenv\Util\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Livewire\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->word(20);
        return [
            'name'=>$this->faker->randomElement(['articulo de revision', 'articulo de revision',])
            //
        ];
    }
}
