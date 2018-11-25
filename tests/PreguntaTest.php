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

}
    