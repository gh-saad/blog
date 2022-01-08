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
        $word = $this->faker->word();
        $slug = Str::slug($word);
        return [
            'cat_slug' => $slug,
            'cat_name' => $word,
        ];
    }
}
