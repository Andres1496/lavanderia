<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexModuleTest extends TestCase
{
	/**
     * @test
	*/	

    function Prueba_CargaDeIndex()
    {
        $this->get('/')
        ->assertStatus(200);
    }

	/**function Prueba_CargaProveedores()
	    {
	        $this->get('/proovedores')
	        ->assertStatus(200);
	    } **/

}
