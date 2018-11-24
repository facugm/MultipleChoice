<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    
    public function testGeneradoCorrecto() {
        
        //Generamos un array a partir del archivo
        $preguntas = new Generador(dirname(__DIR__) . '/preguntas.yml');

        //Probamos que se genere correctamente
        $this->assertNotFalse($preguntas);
    }
}