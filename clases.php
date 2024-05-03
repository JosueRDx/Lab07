<?php

class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        echo "Hola, soy " . $this->nombre . " y tengo " . $this->edad . " años.<br>";
    }
}

?>