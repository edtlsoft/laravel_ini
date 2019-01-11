<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AutenticacionTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function iniciarSesionTest()
    {
        $this->withoutExceptionHandling();

        $response = $this->postJson('/login', [
            //'_token'  => '',
            'usuario' => 'edwardlopez.huem@gmail.com',
            'password' => '12345',
            'remember' => false,
        ]);
        //dd($response);
        $this->assertJson('success');
    }
}
