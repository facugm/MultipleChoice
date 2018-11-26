<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {

    public function testPreguntaExiste(){

        $archivo = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');
        $arrayPreguntas = $archivo['preguntas'];

        $pregunta = new Pregunta($arrayPreguntas[0], 1);

        $this->assertTrue(isset($pregunta));
    }

    public function testObtenerDatosPregunta(){
        $archivo = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');
        $arrayPreguntas = $archivo['preguntas'];

        $pregunta = new Pregunta($arrayPreguntas[0], 1);

        $this->assertNotNull($pregunta->obtenerDescripcion());
        $this->assertNotNull($pregunta->obtenerNumero());
        $this->assertNotNull($pregunta->obtenerRespCorrectas());
        $this->assertNotNull($pregunta->obtenerRespIncorrectas());
        $this->assertNotNull($pregunta->obtenerRespuestas());
        $this->assertNotNull($pregunta->obtenerCantResp());

    }

}
    