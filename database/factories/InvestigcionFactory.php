<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvestigcionFactory extends Factory
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
            'fecha'=>$this->faker->text(250),
            'fechafin'=>$this->faker->text(250),
            'titulo'=>$this->faker->text(2000),
            'path'=>$this->faker->text(2000),
            'area_id'=>area::all()->random()->id,
            'category_id'=>Category::all()->random()->id
        ];
    }
}