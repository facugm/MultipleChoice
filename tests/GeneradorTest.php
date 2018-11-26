<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;


class GeneradorTest extends TestCase {
    
    public function testGeneradoCorrecto() {
        
        //Generamos un objeto de tipo generador que dentro tiene un array de la cantidad de preguntas que nosotros prefieramos
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml', 10);

        //Probamos que se exista el nuevo generador
        $this->assertTrue(isset($generador));
    }

    public function testObtenerPreguntas(){

        //Creamos un nuevo generador con una sola pregunta
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml', 1);

        //Comprobamos que exista la pregunta en el generador
        $this->assertNotNull($generador->verPreguntas());
        
    }

    public function testCantPreguntas(){

        //Creamos un generador con 17 preguntas
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml', 17);

        //Comprobamos que obtener cantidad de preguntas devuelve la cantidad de preguntas pedida
        $this->assertEquals($generador->obtenerCantPreguntas(), 17);
    }
}