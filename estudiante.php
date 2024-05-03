<?php

class Estudiante {
    // Propiedades (atributos) de la clase
    public $nombre;
    public $curso;
    public $nota;

    // Método constructor, llamado automáticamente al crear un objeto
    public function __construct($nombre, $curso, $nota) {
        $this->nombre = $nombre;
        $this->curso = $curso;
        $this->nota = $nota;
    }

    // Método para mostrar información del estudiante
    public function mostrarInformacion() {
        return "Nombre: $this->nombre, Curso: $this->curso, Nota: $this->nota";
    }
}

// Crear un objeto (instancia) de la clase Estudiante
$estudiante1 = new Estudiante("Rodrigo", "Matemáticas", 18);

// Acceder a las propiedades y métodos del objeto
echo $estudiante1->nombre . "<br>"; // Salida: Juan
echo $estudiante1->curso . "<br>"; // Salida: Matemáticas
echo $estudiante1->nota . "<br>"; // Salida: 85
echo $estudiante1->mostrarInformacion(); // Salida: Nombre: Juan, Curso: Matemáticas, Nota: 85

?>