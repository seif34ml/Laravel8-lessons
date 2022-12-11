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
            'user_id'=>$this->faker->randomDigitNot(0),
            'category_id' =>$this->faker->randomDigitNot(0),
            'created_at'=>now(),
            'updated_at'=>now(),
            'slug' => $this->faker->words(2,true),
            'title' => $this->faker->words(3,true),
            'desc' => $this->faker->unique()->text(100)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

}
