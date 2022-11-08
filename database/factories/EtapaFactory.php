<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtapaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->sentence();
        return [
            'name'=>$name,
            'fecha'=>Str::slug($name),
            'orden'=>$this->faker->text(2000),
            'stado'=>$this->faker->randomElement([1,2]),
        ];
    }
}