<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AutenticacionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function iniciarSesionTest()
    {
        $response = $this->post('/login', [
            '_token'  => '',
            'usuario' => 'edwardlopez.huem@gmail.com',
            'password' => '12345',
            'remember' => false,
        ]);
        $this->assertTrue(true);
    }
}
