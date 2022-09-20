<?php
 namespace Tests\Feature;

 use Illuminate\Foundation\Testing\RefreshDatabase;
 use Tests\TestCase;
 
 class RegistrationTest extends TestCase
 {
     /**
      * A basic test example.
      *
      * @return void
      */
     public function test_example()
     {
         $response = $this->get('/homepage/register');
 
         $response->assertStatus(200);
         $response->assertSeeText("Name");
         $response->assertSeeText("Email Address");
         $response->assertSeeText("Phone");
         $response->assertSeeText("Address");
         $response->assertSeeText("Password");
         $response->assertSeeText("Confirm Password");

 
 
     }
 }
 