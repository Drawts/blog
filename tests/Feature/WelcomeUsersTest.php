<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * @test
     */
    function it_wellcome_user_with_nickname()
    {
        $this->get('/saludo/Kevin/Keff')
        ->assertStatus(200)
        ->assertSee('Bienvenido Kevin, tu nickname es: Keff');
    }

    /**
     * @test
     */
    function it_wellcome_user_without_nickname()
    {
       $this->get('/saludo/Kevin')
       ->assertStatus(200)
       ->assertSee('Bienvenido Kevin.'); 
    }
}
