<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/homepage/login');

        $response->assertStatus(200);
        $response->assertSeeText("Email Address");
        $response->assertSeeText("Password");
        $response->assertSeeText("Login");
        $response->assertSeeText("Forgot Your Password?");


    }
}
