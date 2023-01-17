<?php

namespace Database\Factories;

use App\Models\Cards;
use Illuminate\Database\Eloquent\Factories\Factory;

class TasksFactory extends Factory
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
            'card_id'=>Cards::get()->random()->id
        ];
    }
}
