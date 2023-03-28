

<?php
/*Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron. */
echo "ingrese un numero <br>". "\n" ;

$numeros=0;
$contador=0;

do {
    $contador++;
    if ($numeros +$contador >1001 )
{

    break;
}
else{
    $numeros+=$contador;
}

}while($numeros<=1000);
echo "el resultado de la suma es: ", $numeros. "<br>"; 
echo "la cantidad de numeros que se sumaron: ", $contador;




?>