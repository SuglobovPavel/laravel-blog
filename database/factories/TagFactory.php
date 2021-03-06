<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Tag::class;
    public function definition()
    {
        $word = $this->faker->word;
        return [
            'name' => $word,
            'slug' => $word,
        ];
    }
}
