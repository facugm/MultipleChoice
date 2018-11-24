<?php

namespace MultipleChoice;

use Symfony\Component\Yaml\Yaml;

class Generador {

    protected $preguntas;

    public function __construct($file) {
        $preguntas = Yaml::parseFile($file);

        shuffle($preguntas);
    }

    public function verPreguntas() {
        return $this->preguntas;
    }
}