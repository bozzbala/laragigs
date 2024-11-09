<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentences(3, true),
            'content' => $this->faker->paragraphs(6, true),
            'static_url' => $this->faker->slug(2),
        ];
    }
}
