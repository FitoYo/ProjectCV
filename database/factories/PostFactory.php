<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'body' => $this->faker->text(),
            'slug' => Str::slug($title),
        ];
    }
}
