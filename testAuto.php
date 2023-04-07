<?php
require 'clase2\Auto.php';

$Auto1 = new Auto ('Fiat', 'Rojo', 20000, '2018-01-01');
$Auto2 = new Auto ('Fiat', 'Azul', 20000, '2018-01-01');
$Auto3 = new Auto ('Toyota', 'Rojo', 20000, '2018-01-01');
$Auto4 = new Auto ('Toyota', 'Rojo', 10000, '2018-01-01');
$Auto5 = new Auto ('Ford', 'Blanco', 18000, '2018-01-01');

//agregar impuesto en los ultimos 3 objestos
$Auto5->AgregarImpuestos(1500);
$Auto4->AgregarImpuestos(1500);
$Auto3->AgregarImpuestos(1500);

// resultado de la suma del primer objeto auto mas el segundo
echo "suma del primer auto con el segundo: ";
echo Auto::Add($Auto1, $Auto2). "</br>";
echo Auto::Add($Auto3, $Auto4). "</br>";

//comparar el primer objeto auto con el quiento, e informar si son iguales o no
echo "comparo el primer auto con el quinto: ";
if ($Auto1->Equals($Auto5)) {
    echo "Los autos son iguales". "</br>";
} else {
    echo "Los autos no son iguales". "</br>";
}
//comparar el primer auto con el segundo y el quinto e informar si son iguales o no;
echo "comparo el primer auto con el segundo y el quinto: ";
if ($Auto1->Equals($Auto2) && $Auto1->Equals($Auto5)) {
    echo "Los autos son iguales". "</br>";
} else {
    echo "Los autos no son iguales". "</br>";
}
//comparo el 1 con 2do
echo "comparo el primer auto con el segundo: ";
if ($Auto1->Equals($Auto2)) {
    echo "Los autos son iguales".   "</br>";
} else {
    echo "Los autos no son iguales". "</br>";
}
//utilizar el metodo de clase "mostrar auto" para mostrar los autos impares (1,3,5);
echo "</br>". "Autos impares: ". "</br>";
$Auto1->MostrarAuto();
$Auto3->MostrarAuto();
$Auto5->MostrarAuto();


?>