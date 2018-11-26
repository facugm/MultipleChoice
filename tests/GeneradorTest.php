<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;


class GeneradorTest extends TestCase {
    
    public function testGeneradoCorrecto() {
        
        //Generamos un array a partir del archivo
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml', 10);

        //Probamos que se genere
        $this->assertTrue(isset($generador));
    }

    public function testObtenerPreguntas(){

        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml', 1);

        $this->assertNotNull($generador->verPreguntas());
        
    }

    public function testCantPreguntas(){

        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml', 17);

        $this->assertEquals($generador->obtenerCantPreguntas(), 17);
    }
}