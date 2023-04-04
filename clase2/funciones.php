<?php

  function MostrarAuto($auto) {
    echo "Marca: " . $auto->_marca . "<br>";
    echo "Color: " . $auto->_color . "<br>";
    echo "Precio: $" . $auto->_precio . "<br>";
    echo "Fecha: " . $auto->_fecha->format('Y-m-d') . "<br>";

}
?>