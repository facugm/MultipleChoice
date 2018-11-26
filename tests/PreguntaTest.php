<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {

    public function testPreguntaExiste(){

        //En la variable archivo guardamos el archivo preguntas.yml convertido en array
        $archivo = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');

        //Guardamos el array de preguntas en una variable aparte
        $arrayPreguntas = $archivo['preguntas'];

        //Creamos una pregunta a partir del primero objeto del array de preguntas disponible
        $pregunta = new Pregunta($arrayPreguntas[0], 1);

        //Comprobamos que se haya creado correctamente el objeto pregunta
        $this->assertTrue(isset($pregunta));
    }

    public function testObtenerDatosPregunta(){

        //En la variable archivo guardamos el archivo preguntas.yml convertido en array
        $archivo = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');

        //Guardamos el array de preguntas en una variable aparte
        $arrayPreguntas = $archivo['preguntas'];
        
        //Creamos una pregunta a partir del primero objeto del array de preguntas disponible
        $pregunta = new Pregunta($arrayPreguntas[0], 1);

        //Comprobamos que existen todas las caracteristicas de la pregunta
        $this->assertNotNull($pregunta->obtenerDescripcion());
        $this->assertNotNull($pregunta->obtenerNumero());
        $this->assertNotNull($pregunta->obtenerRespCorrectas());
        $this->assertNotNull($pregunta->obtenerRespIncorrectas());
        $this->assertNotNull($pregunta->obtenerRespuestas());
        $this->assertNotNull($pregunta->obtenerCantResp());

    }

}
    