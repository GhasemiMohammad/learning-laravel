<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function test_post_record_exist()
    {
        $this->assertDatabaseHas('posts',[
            'id'=>7
        ]);
    }
}
