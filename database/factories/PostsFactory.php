<?php

namespace Database\Factories;
use App\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'title' => $this->faker->Text(180),
            'body' => $this->faker->text
        ];
    }
}
