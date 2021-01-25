<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testLoadHomePage(){
        $this->get('/')->assertStatus(302);
    }

    public function testLoadCatalogPage(){
        $this->get('/catalog')->assertStatus(200)->assertSee('Catàleg');
    }
    public function testLoadCreatePage(){
        $this->get('/catalog/create')->assertStatus(200)->assertSee('Afegir pel.lícula');
    }
    public function testLoadEditPage(){
        $this->get('/catalog/2/edit')->assertStatus(200)->assertSee('Modificar pel.lícula');
    }
    public function testLoadShowPage(){
        $this->get('/catalog/2')->assertStatus(200)->assertSee('Editar Pel.lícula');
    }
}
