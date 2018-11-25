<?php

namespace MultipleChoice;

use Symfony\Component\Yaml\Yaml;

class Generador {

    public $preguntas;

    public function __construct($file) {
        $archivo = Yaml::parseFile($file);

        $listaPregs = $archivo['preguntas'];
        shuffle($listaPregs);

        for($i = 0; $i < 10; $i++){
            $this->preguntas[$i] = new Pregunta($listaPregs[$i], $i+1);
        }
        

    }

    public function verPreguntas() {
        return $this->preguntas;
    }
}