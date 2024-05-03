<?php

// Clase base Usuario
class Usuario {
    protected $nombre;
    protected $email;
    protected $password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }

    // Métodos getters y setters
    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Otros métodos comunes a todos los usuarios pueden ir aquí
}

// Subclase UsuarioRegular
class UsuarioRegular extends Usuario {
    // Podemos agregar atributos y métodos específicos para usuarios regulares si es necesario
}

// Subclase UsuarioAdministrador
class UsuarioAdministrador extends Usuario {
    // Podemos agregar atributos y métodos específicos para usuarios administradores si es necesario
}

// Ejemplo de uso
$usuarioRegular = new UsuarioRegular("Juan", "juan@example.com", "contraseña");
$usuarioAdmin = new UsuarioAdministrador("María", "maria@example.com", "contraseña");

// Accediendo a los atributos y métodos de la clase base Usuario
echo "Nombre del usuario regular: " . $usuarioRegular->getNombre() . "\n";
echo "Email del usuario administrador: " . $usuarioAdmin->getEmail() . "\n";

?>
