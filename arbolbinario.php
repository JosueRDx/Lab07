<?php

//Se Define la clase Nodo
class Nodo {
    public $valor;
    public $izquierda; 
    public $derecha; 

    //Constructor que inicializa el valor del nodo y las referencias a los nodos hijos como nulas
    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}

//Se define la clase ArbolBinario
class ArbolBinario {
    public $raiz; 

    //Constructor que inicializa la raíz del árbol como nula
    public function __construct() {
        $this->raiz = null;
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
        if ($nuevoNodo->valor < $nodoActual->valor) { 
            if ($nodoActual->izquierda === null) { 
                $nodoActual->izquierda = $nuevoNodo; 
            } else {
                $this->agregarNodoRecursivamente($nuevoNodo, $nodoActual->izquierda);
            }
        } elseif ($nuevoNodo->valor > $nodoActual->valor) { 
            if ($nodoActual->derecha === null) { 
                $nodoActual->derecha = $nuevoNodo; 
            } else {
                $this->agregarNodoRecursivamente($nuevoNodo, $nodoActual->derecha); 
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
echo "Raíz del árbol: " . $arbol->raiz->valor . "<br>";

?>