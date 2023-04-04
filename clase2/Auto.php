<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
 
public function MostrarAuto(){
    echo "Marca: " . $this-> _marca . "<br>";
    echo "Color: " . $this->_color . "<br>";
    echo "Precio: $" . $this->_precio . "<br>";
    echo "Fecha: " . $this->_fecha->format('Y-m-d') ."<br>";
}

}

//instanciar
$miAuto = new Auto('Fiat', 'Rojo', 20000);

//llamar al metodo
$miAuto->agregarImpuestos(500);
 
//mostrar
$miAuto->MostrarAuto();


?>
