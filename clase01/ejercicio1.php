

<?php
/*Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron. */
echo "ingrese un numero <br>" . "\n";

$numeros = 0;
$contador = 0;

do {
    $contador++;
    if ($numeros + $contador > 1001) {

        break;
    } else {
        $numeros += $contador;
    }
} while ($numeros <= 1000);
echo "el resultado de la suma es: ", $numeros . "<br>";
echo "la cantidad de numeros que se sumaron: ", $contador, "<br>";

/* Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.*/
$mes_actual = date("n");
$dia_actual = date("d");
echo date("d-m-y"), "</br>";
echo date("D-M-y"), "</br>";
echo date("Y/m/d"), "</br>";
if (($mes_actual == 12 && $dia_actual > 21) || $mes_actual <= 3 && $dia_actual <= 20) {
    echo "podemos decir que estamos en verano", "</br>";
    # code...
} elseif (($mes_actual == 3 && $dia_actual > 21) || $mes_actual <= 5 && $dia_actual <= 20) {
    echo "podemos decir que es otoño", "</br>";
} elseif (($mes_actual == 5 && $dia_actual < 21) || $mes_actual <= 7 && $dia_actual <= 20) {
    echo "podemos decir que es invierno";
    # code...
} else echo "podemos decir que es primavera", "</br>";

/* Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. Ejemplo 1: $a
= 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
Pruebas para el número del medio:

1   5   3     el 3 es del medio
5   1   5   no hay numero del medio
3  5   1     el 3 es del medio
3   1   5    el 3 es del medio
5   3   1    el 3 es del medio
1  5  1    no hay numero del medio */

$numero1 = 1;
$numero2 = 5;
$numero3 = 1;
"</br>";
echo "obtener el valor del medio: ", "</br>";

if ($numero1 != $numero2 && $numero1 != $numero3 && $numero2 != $numero3) {
    if (($numero1 > $numero2 && $numero1 < $numero3) || ($numero1 > $numero3 && $numero1 < $numero2)) {

        echo "podemos decir que ", $numero1, "esta en el medio";
    } elseif (($numero2 > $numero3 && $numero2 < $numero1) || ($numero2 > $numero1 && $numero2 < $numero3)) {
        echo "podemos decir que ", $numero2, "esta en el medio";
    } elseif (($variableC > $variableB && $variableC < $variableA) || ($variableC > $variableA && $variableC < $variableB)) {
        echo "podemos decir que ", $numero3, "esta en el medio", "</br>";
    }
} else {
    echo ("no hay valor del medio"), "</br>";
    "</br>";
}

/*Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.*/


//prompt function
/*function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}
*/
//program
/*$prompt_msg = "Please type your name.";
$name = prompt($prompt_msg);

$output_msg = "Hello there ".$name."!";
echo($output_msg);*/
/*
$operador=0;
$op1=0;
$op2=0;
$resultado=0;

//defino las funciones de los operadores
function sumar ($op1,$op2) {
    $suma=$op1+ $op2;
    return $suma;
}
function restar ($op1, $op2){
    $resta=$op1 - $op2;
    return $resta;
}
function multiplicar ($op1, $op2){
$multi = $op1 * $op2;
return $multi;}
function dividir ($op1, $op2){
    $divi = $op1 / $op2;
    return $divi;}

    //comienza el codigo

$prompt_msg = "por favor indique el primer numero.";
$op1 = prompt ($prompt_msg);

$prompt_msg = "por favor indique el segundo numero.";
$op2 = prompt ($prompt_msg);

$prompt_msg= "por favor indique el operador: +,-,*,/";
$operador = prompt( $prompt_msg);

//switch de los operadores
switch ($operador) {
    case '0':
        sumar($op1,$op2);
        $resultado = $suma;
        break;
    
    case '1':
        echo "$op1 - $op2=";
        restar ($op1,$op2);
        $resultado = $resta;
        break;
    case '2':
        echo "$op1 * $op2=";
        multiplicar($op1,$op2);
        $resultado = $multi;
        break;
    case '3':
        echo "$op1 / $op2=";
        dividir ($op1,$op2);
        $resultado= $divi;
        break;
}
echo "$op1 + $op2=", $resultado; 

*/

/*Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”. */
/*
$num = 0;
$decena = " ";
$unidadDecimal = " ";

//pregunto el decimal del numero y a continuacion tengo que preguntarle si esta dentro del 0 al 9.

if ($num < 20 or $num > 60) {
    echo "El número está fuera del rango válido.";
} elseif ($num >= 20 && $num <= 30) {
    $decena = "veinte y ";
} elseif ($num >= 30 && $num <= 40) {
    $decena = "treinta y ";
} elseif ($num >= 40 && $num <= 50) {
    $decena = "cuarenta y ";
} elseif ($num >= 50 && $num <= 60) {
    $decena = "cincuenta y ";
} elseif ($num == 60) {
    $decena = "sesenta y ";
} else 
    echo"El número no está en la lista de opciones válidas.";
*/
$num=0;
if (isset($_POST['numero'])) {
    $num = intval($_POST['numero']);

    if ($num < 20 || $num > 60) {
        echo "El número está fuera del rango válido.";
    } else {
        $unidades = array("", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve");
        $decenas = array("veinte", "treinta", "cuarenta", "cincuenta", "sesenta");

        if ($num == 20) {
            echo "Veinte";
        } else if ($num < 30) {
            echo $decenas[0] . " y " . $unidades[$num - 20];
        } else {
            $decena = $decenas[floor($num / 10) - 2];
            $unidad = $unidades[$num % 10];
            echo $decena . ($unidad != "" ? " y " . $unidad : "");
        }
    }
}
?>

<form method="POST" action="">
    <label for="numero">Ingresa un número entre 20 y 60:</label>
    <input type="number" name="numero" id="numero" min="20" max="60">
    <input type="submit" value="Enviar">
</form>
?>