<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    //Prueba para comprobar el funcionamiento de la ruta "/usuarios" que muestra "Usuarios"
    function it_shows_the_users_list()
    {
        $this->get('/usuarios') //queremos acceder a esta URL
             ->assertStatus(200) //comprobar que carga correctamente la URL
             ->assertSee('Listado de usuarios') //comprobar que se ve en pantalla el texto ="Usuarios"
             ->assertSee('Joel') //y el resto de usuarios
             ->assertSee('Ellie');
    }

      /** @test */
    //Prueba para comprobar que no hay usuarios registrados
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios?empty') 
             ->assertStatus(200) 
             ->assertSee('No hay usuarios registrados'); 
          
    }

    /** @test */
    //Prueba para comprobar el funcionamiento de la ruta "/usuarios/{id}" que muestra "Detalles del usuario"
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5') //queremos acceder a la URL del usuario 5
             ->assertStatus(200) //comprobar que carga correctamente esta URL
             ->assertSee('Mostrando detalle del usuario: 5'); //comprobar que se ve="Detalles del usuario #5"
    }

      /** @test */
    //Prueba para comprobar el funcionamiento de la ruta "/usuarios/nuevo" que muestra "Crear nuevo usuario"
    function it_loads_the_new_users_page()
    {
        
        $this->get('/usuarios/nuevo') //queremos acceder a la URL de un nuevo ususario
             ->assertStatus(200) //comprobar que carga correctamente esta URL
             ->assertSee('Crear nuevo usuario'); //comprobar que se ve="Crear nuevo usuario"
    }
}

