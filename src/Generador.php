<?php

namespace MultipleChoice;

use Symfony\Component\Yaml\Yaml;

class Generador {

    protected $preguntas;
    public $cantPreg = 10;

    public function __construct($file, $cant) {
        $archivo = Yaml::parseFile($file);
        $this->cantPreg = $cant;

        $listaPregs = $archivo['preguntas'];
        shuffle($listaPregs);

        for($i = 0; $i < $this->cantPreg; $i++){
            $this->preguntas[$i] = new Pregunta($listaPregs[$i], $i+1);
        }

    }

    public function verPreguntas() {
        return $this->preguntas;
    }

    public function obtenerCantPreguntas(){
        return $this->cantPreg;
    }

}