<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $text=$this->faker->unique()->words(2,true);
        return [

            'created_at'=>now(),
            'updated_at'=>now(),
            'slug' => str_replace(' ','-',$text),
            'name' => $text,
            'id'=>$this->faker->unique()->randomElement( [6])

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

}
