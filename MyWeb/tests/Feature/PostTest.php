<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
    }
    public function test_get_post(){
        $response = $this->get('/post/111');

        $response->assertStatus(200);
    }
    public function test_unex_post(){
        $response = $this->get('/post/58214');

        $response->assertStatus(404);
    }
    public function test_post_response(){
        $response = $this->get('/client/111');
        $response->assertViewHas('post') ;
    }
}
