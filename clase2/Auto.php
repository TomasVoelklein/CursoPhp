<?php
//clase
 class Auto {
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
    
        //obtener atributos
    
 function getColor() {
    return $this->_color;
}

public function getPrecio() {
    return $this->_precio;
}

public function getMarca() {
    return $this->_marca;
}

public function getFecha() {
    return $this->_fecha;
}

public static function MostrarAuto($auto) {
    echo "Marca: " . $auto->_marca . "<br>";
    echo "Color: " . $auto->_color . "<br>";
    echo "Precio: $" . $auto->_precio . "<br>";
    echo "Fecha: " . $auto->_fecha->format('Y-m-d') . "<br>";
}

}

$miAuto = new Auto('Fiat', 'Rojo', 20000);
?>
