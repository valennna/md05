<?php

namespace Database\Factories;

use App\Models\Lists;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(20),
            'list_id'=>Lists::get()->random()->id
        ];
    }
}
