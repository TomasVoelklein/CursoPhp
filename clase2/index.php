<?php
echo "hola mundo";
//HTDOCS/ --> http://localhost/ 
// HTDOCS/clase01/index.php --> http://localhost/clase01/index.php

// Path: clase2\index.php
require 'Auto.php';

// Crear instancia de la clase Auto
$miAuto = new Auto('Fiat', 'Rojo', 20000);

// Llamar al método AgregarImpuestos
$miAuto->AgregarImpuestos(500);

// Mostrar los datos del auto
MostrarAuto($miAuto);

?>