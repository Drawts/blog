<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    /** @test */
    function it_loads_the_users_details_page()
    {
    	$this->get('/usuarios/5')
    	->assertStatus(200)
    	->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->withoutExceptionHandling();
    	$this->get('/usuarios/nuevo')
    	->assertStatus(200)
    	->assertSee('Creando usuario');
    }

    /** @test */
    function it_loads_the_users_edit_page(){
        $this->withoutExceptionHandling();
        $this->get('/usuarios/1/edit')
        ->assertStatus(200)
        ->assertSee('Editando la informacion del usuario: 1');


    }
    function it_dont_loads_the_users_edit_page()
    {
        $this->get('/usuarios/text/edit')
            ->assertStatus(404);
    }
}
