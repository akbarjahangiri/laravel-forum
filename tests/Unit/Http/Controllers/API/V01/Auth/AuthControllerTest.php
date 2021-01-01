<?php

namespace Tests\unit\Http\Controllers\API\V01\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_register_should_be_validate()
    {
        $response = $this->postJson('api/v1/auth/register');
        $response->assertStatus(422);
    }

    public function test_new_user_can_register()
    {
        $response = $this->postJson('api/v1/auth/register',[
            'name' => 'akbar',
            'email' => 'akbar@mail.com',
            'password' => '1234567'
        ]);
        $response->assertStatus(201);
    }
}
