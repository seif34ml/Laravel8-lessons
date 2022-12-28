<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>'1',
            'user_id'=>$this->faker->numberBetween(0,30),
            'category_id' =>$this->faker->randomElement([4, 6, 9, 1, 3]),
            'created_at'=>now(),
            'updated_at'=>now(),
            'title' => $this->faker->words(3,true),
            'slug' => str_replace(' ', '-', $this->faker->words(2,true)),
            'desc' => $this->faker->unique()->text(100)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

}
