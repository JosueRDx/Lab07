<?php
//Se Define la clase Nodo
class Nodo {
    private $valor;
    private $izquierda; 
    private $derecha; 

    //Constructor que inicializa el valor del nodo y las referencias a los nodos hijos como nulas
    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }

    //Getters para las propiedades privadas
    public function obtenerValor() {
        return $this->valor;
    }

    public function obtenerIzquierda() {
        return $this->izquierda;
    }

    public function obtenerDerecha() {
        return $this->derecha;
    }

    //Setters para las propiedades privadas
    public function establecerIzquierda($nodo) {
        $this->izquierda = $nodo;
    }

    public function establecerDerecha($nodo) {
        $this->derecha = $nodo;
    }
}

//Se define la clase ArbolBinario
class ArbolBinario {
    private $raiz; 

    //Constructor que inicializa la raíz del árbol como nula
    public function __construct() {
        $this->raiz = null;
    }

    //Método para obtener la raíz del árbol
    public function obtenerRaiz() {
        return $this->raiz;
    }

    //Método para establecer la raíz del árbol
    public function establecerRaiz($nodo) {
        $this->raiz = $nodo;
    }

    //Método para agregar un nuevo nodo al árbol
    public function agregarNodo($valor) {
        $nuevoNodo = new Nodo($valor);
        if ($this->raiz === null) {
            $this->raiz = $nuevoNodo; 
        } else {
            $this->agregarNodoRecursivamente($nuevoNodo, $this->raiz);
        }
    }

    //Método privado para agregar un nodo recursivamente
    private function agregarNodoRecursivamente($nuevoNodo, $nodoActual) {
        if ($nuevoNodo->obtenerValor() < $nodoActual->obtenerValor()) { 
            if ($nodoActual->obtenerIzquierda() === null) { 
                $nodoActual->establecerIzquierda($nuevoNodo); 
            } else {
                $this->agregarNodoRecursivamente($nuevoNodo, $nodoActual->obtenerIzquierda());
            }
        } elseif ($nuevoNodo->obtenerValor() > $nodoActual->obtenerValor()) { 
            if ($nodoActual->obtenerDerecha() === null) { 
                $nodoActual->establecerDerecha($nuevoNodo); 
            } else {
                $this->agregarNodoRecursivamente($nuevoNodo, $nodoActual->obtenerDerecha()); 
            }
        }
    }
}

//Creación de un objeto de la clase ArbolBinario
$arbol = new ArbolBinario();

//Se Agrega nodos al árbol
$arbol->agregarNodo(11);
$arbol->agregarNodo(5);
$arbol->agregarNodo(15);
$arbol->agregarNodo(3);
$arbol->agregarNodo(7);
$arbol->agregarNodo(12);
$arbol->agregarNodo(18);

//Se Imprime la raíz del árbol
echo "Raíz del árbol: " . $arbol->obtenerRaiz()->obtenerValor() . "<br>";
?>