<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;


class GeneradorTest extends TestCase {
    
    public function testGeneradoCorrecto() {
        
        //Generamos un array a partir del archivo
        $generador = new Generador(dirname(__DIR__) . '/preguntas.yml');

        //Probamos que se genere
        $this->assertTrue(isset($generador));
    }
}