<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FirstTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_user_can_register()
    {
        $response = $this->post('/api/register', [
            'name'     => 'Aurora',
            'email'    => 'aurora@gmail.com',
            'password' => 'asdasd',
            'confirm_password' => 'asdasd',
        ]);

        $response->assertStatus(201);
    }
}
