<?php


/*Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/


//toma un array y array_reverse  inverte el orden de los elementos en ese array. Luego, devuelve el array invertido.

function invertirArray($array) {
    $arrayInvertido = array_reverse($array);
    return $arrayInvertido;
}
/* function invertirArrayFor($array) {
    $arrayInvertido = array();
    for ($i = count($array)-1; $i >= 0; $i--) {
        $arrayInvertido[] = $array[$i];
    }
    return $arrayInvertido;
}
utiliza un ciclo for para iterar a través del array original $array de forma inversa. En cada iteración, se agrega el elemento actual al principio del array invertido $arrayInvertido, utilizando la función [] para agregar un nuevo elemento al final del array.
*/

// Ejemplo de uso
$palabra = "HOLA";
$chars = str_split($palabra);
$charsInvertidos = invertirArray($chars);
$palabraInvertida = implode($charsInvertidos);
echo $palabraInvertida; // Imprime "ALOH"


 /*Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
pertenece a algún elemento del listado.
0 en caso contrario. */
/*
function validarPalabra($palabra, $max){
    $palabrasValidas = array("Recuperatorio", "Parcial", "Programacion");
    $retorno = 0;
    if(strlen($palabra) <= $max){
        foreach ($palabrasValidas as $palabraValida) {
            if($palabra == $palabraValida){
                $retorno = 1;
                break;
            }
        }
    }
    return $retorno;
}

// Ejemplo de uso
$palabra = "Parcial";
$max = 20;
if (validarPalabra($palabra, $max)) {
    echo "La palabra es válida.";
} else {
    echo "La palabra no es válida.";
}

//aplicacion nª 17 

/* En esta clase Auto, se definen los atributos _color, _precio, _marca y _fecha como privados. También se define un constructor que recibe estos cuatro parámetros y los asigna a los atributos correspondientes.
 */

 /*
class Auto {
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct($color, $precio=null, $marca, $fecha=null) {
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_marca = $marca;
        $this->_fecha = $fecha;
    }
    /* 
Se definen cuatro métodos obtenerColor, obtenerPrecio, obtenerMarca y obtenerFecha que permiten obtener el valor de cada atributo desde fuera de la clase. */
/*
    public function obtenerColor() {
        return $this->_color;
    }

    public function obtenerPrecio() {
        return $this->_precio;
    }

    public function obtenerMarca() {
        return $this->_marca;
    }

    public function obtenerFecha() {
        return $this->_fecha;
    }

    /*Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
por parámetro y que se sumará al precio del objeto.*/
/*
public function AgregarImpuestos ($impuesto) {
    $this ->_precio += $impuesto;
}

/* Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto. */
/*
public static function MostrarAuto($auto) {
    echo "Marca: " . $auto->_marca . "<br>";
    echo "Color: " . $auto->_color . "<br>";
    echo "Precio: $" . $auto->_precio . "<br>";
    echo "Fecha: " . $auto->_fecha->format('Y-m-d') . "<br>";
} */








?>