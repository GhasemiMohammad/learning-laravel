<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>function () {
                return User::factory()->create()->id;
            },
            'post_id'=>function(){
                return Post::factory()->create()->id;
            },
            'title'=>fake()->text(50),
            'body'=>fake()->text()
        ];
    }
}
