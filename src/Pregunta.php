<?php

namespace MultipleChoice;

use Symfony\Component\Yaml\Yaml;

class Pregunta {

    protected $numero;
    protected $descripcion;
    protected $respuestas;
    protected $respCorrectas;
    protected $respIncorrectas;
    protected $opcionTodas = false;
    protected $opcionNinguna = false;
    protected $ningunaText = "Ninguna de las anteriores";
    protected $todas;
    protected $ninguna;

    public function __construct($array, $num){
        $this->numero = $num;
        $this->descripcion=$array["descripcion"];
        $this->respCorrectas = $array["respuestas_correctas"];
        $this->respIncorrectas = $array["respuestas_incorrectas"];
        
        if($this->respuestas_incorrectas = []) {
            $this->todas = true;
        } 

        if($this->respuestas_correctas = []) {
            $this->ninguna = true;
        }

        if(isset($array["ocultar_opcion_todas_las_anteriores"])){
            $this->opcionTodas = $array["ocultar_opcion_todas_las_anteriores"];
        }

        if(isset($array["ocultas_opcion_ninguna_de_las_anteriores"]) ){
            $this->opcionNinguna = $array["ocultas_opcion_ninguna_de_las_anteriores"];
        }

        if(isset($array["texto_ninguna_de_las_anteriores"])){
            $this->ningunaText = $array["texto_ninguna_de_las_anteriores"];
        }
        
        $this->todasLasResp();
    }

    protected function todasLasResp(){
        $this->respuestas = array_merge($this->respCorrectas, $this->respIncorrectas);
        shuffle($this->respuestas);
    }

    public function obtenerRespuestas(){
        return $this->respuestas;
    }

    public function obtenerRespCorrectas(){
        return $this->respCorrectas;
    }

    public function obtenerRespIncorrectas(){
        return $this->respIncorrectas;
    }

    public function obtenerDescripcion(){
        return $this->descripcion;
    }

    public function obtenerNumero(){
        return $this->numero;
    }

    public function obtenerCantResp(){
        return count($this->respuestas);
    }

}