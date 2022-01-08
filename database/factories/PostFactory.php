<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $title = $this->faker->sentence();
        $slug = Str::slug($title);
        return [
            'post_slug'         => $slug,
            'post_title'        => $title,
            'post_excerpt'      => $this->faker->paragraph(2),
            'post_body'         => $this->faker->paragraph(6),
            'post_img'          => 'assets/img/illustration-1.png',
            'post_author_id'    => User::factory()->create(),
            'post_cat_id'       => Category::factory()->create(),
        ];
    }
}
