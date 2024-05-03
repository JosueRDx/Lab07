<?php
declare(strict_types=1);

//Interfaz para los animales que comen
interface Comida
{
    public function eat(): void;
}

//Clase Perro que implementa la interfaz Comida
class Perro implements Comida
{
    public function eat(): void
    {
        echo "El perro mastica y traga su comida";
    }
}

//Clase Pez que implementa la interfaz Comida
class Pez implements Comida
{
    public function eat(): void
    {
        echo "El pez traga su comida";
    }
}

//Función que alimenta a cualquier animal que implemente la interfaz Comida
function alimentarAnimal(Comida $animal): void
{
    $animal->eat();
}

//Creación de objetos Perro y Pez
$perro = new Perro();
$pez = new Pez();

//Alimentar al Perro
echo "Alimentando al Perro: ";
alimentarAnimal($perro);
echo "<br>";

//Alimentar al Pez
echo "Alimentando al Pez: ";
alimentarAnimal($pez);
echo "<br>";
?>