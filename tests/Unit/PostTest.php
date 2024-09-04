<?php

namespace Tests\Unit;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Faker\Factory;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class PostTest extends TestCase
{
//    public function test_full_name_accessor_works()
//    {
//        $user = User::factory()->create([
//            'first_name' => 'Ali',
//            'last_name' => 'Daei',
//
//        ]);
//
//        $this->assertEquals('Ali Daei', $user->fullName);
//    }

    public function test_posts_and_comments_relations()
    {
        $comment = Comment::factory()->create([
           'user_id'=>10,
           'post_id'=>8,
            'title'=>"my title",
            'body'=>"your post is very good. i like it"
        ]);
        $this->assertInstanceOf(Post::class, $comment->post);
    }



}
