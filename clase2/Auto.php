<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//clase
 class auto {
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;
//constructor
    public function __construct($marca, $color, $precio = 0, $fecha = null) {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        if ($fecha === null) {
            $this->_fecha = new DateTime();
        } else {
            $this->_fecha = new DateTime($fecha);
        }
    }

//agregar impuesto
    public function agregarImpuestos($impuesto) {
        $this->_precio += $impuesto;
    }
 
public function MostrarAuto(){
    echo "Marca: " . $this-> _marca . "<br>";
    echo "Color: " . $this->_color . "<br>";
    echo "Precio: $" . $this->_precio . "<br>";
    echo "Fecha: " . $this->_fecha->format('Y-m-d') ."<br>";
}
/* Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.*/
public function Equals($auto) {
    if ($this->_marca == $auto->_marca) {
        return true;
    } else {
        return false;
    }
}
/*Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.*/

public static function Add($auto1, $auto2) {
    if ($auto1 ->Equals($auto2)&& $auto1->_color === $auto2->_color) {
        return  "</br>" . "La suma de los autos de igual color y marca es: $" . ($auto1->_precio + $auto2->_precio) . "</br>";
} else {
    echo "</br>", "no se puede hacer la suma de los precios porque no son de la misma marca y/o color ";
    return "'0'" . "</br>";
}

}




}
