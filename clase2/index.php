<?php
echo "hola mundo";
//HTDOCS/ --> http://localhost/ 
// HTDOCS/clase01/index.php --> http://localhost/clase01/index.php

// Path: clase2\index.php
require 'Auto.php';

// Crear instancia de la clase Auto
$miAuto = new Auto('Fiat', 'Rojo', 20000);
$Auto1 = new Auto ('Fiat', 'Rojo', 20000, '2018-01-01');
$Auto2 = new Auto ('Toyota', 'Rojo', 20000, '2018-01-01');
$Auto3 = new Auto ('Volkswagen', 'Naranja', 20000, '2018-01-01');
$Auto4 = new Auto ('Fiat', 'Rojo', 20000, '2018-01-01');

// Llamar al método AgregarImpuestos
$miAuto->AgregarImpuestos(2525);

// Mostrar los datos del auto
"</br>";
$miAuto->MostrarAuto(). "</br>";
"</br>";
$Auto1->MostrarAuto();
"</br>";
$Auto2->MostrarAuto();
"</br>";
$Auto3->MostrarAuto();
"</br>";
// Comparar dos autos

echo Auto::Add($Auto1, $Auto2); 

echo Auto::Add($Auto1, $Auto4);
?>