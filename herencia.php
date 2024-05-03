<?php

//Clase base (clase padre)
class Persona {
    //Propiedades
    protected $nombre;
    protected $edad;

    //Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //Método para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    //Método para obtener la edad
    public function getEdad() {
        return $this->edad;
    }

    //Método para saludar
    public function saludar() {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }
}

//Clase derivada (clase hija)
class Estudiante extends Persona {
    //Propiedad adicional
    protected $curso;

    //Constructor
    public function __construct($nombre, $edad, $curso) {
        parent::__construct($nombre, $edad);
        $this->curso = $curso;
    }

    //Método para obtener el curso
    public function getCurso() {
        return $this->curso;
    }

    //Método para saludar (sobrescribe el método de la clase padre)
    public function saludar() {
        return "Hola, soy {$this->nombre}, tengo {$this->edad} años y estoy estudiando {$this->curso}.";
    }
}

//Se crea objeto de la clase Estudiante
$estudiante = new Estudiante("Josue", 20, "Ingeniería");

//Accede a los métodos de la clase base (Persona)
echo $estudiante->saludar() . "<br>";
echo "Nombre del estudiante: " . $estudiante->getNombre() . "<br>";
echo "Edad del estudiante: " . $estudiante->getEdad() . "<br>";
echo "Curso del estudiante: " . $estudiante->getCurso() . "<br>";

?>