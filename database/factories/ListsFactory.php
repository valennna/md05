<?php

namespace Database\Factories;

use App\Models\Desk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListsFactory extends Factory
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
            'desk_id'=>Desk::get()->random()->id
        ];
    }
}
