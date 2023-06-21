<?php
$numero = intval(readline("ingresar un numero \n "));

$signo = ($numero >= 1) ? true : false;

var_dump($signo) ;

if($signo === true){
    echo "El numero es positivo \n";
}else{
    echo "El numero es negativo \n";
}

$numero = intval(readline("Ingrese su numero \n "));

if(($numero % 2) == 0){
    echo "Numero es par \n";
}else{
    echo "Numero es impar \n";
}


$numero = intval(readline("Ingrese un numero \n "));


if(($numero % 3 && $numero % 5) == 0 ){
    echo "El numero es divisible \n";
}
else{
    echo "El numero no es divisible \n";
}
$nota = intval(readline("Ingrese su nota \n"));


if($nota <= 100){
    if($nota >= 60){
        echo "Aprobado \n";
    }elseif($nota >= 90 ){
        echo "Sobresaliente \n";
    }
    else{
        echo "Reprobado \n";
    }
}else{
    "Nota no valida \n";
}

$año = intval(readline("Ingrese año \n"));

if(($año % 4) == 0 ){
    echo "El año es bisiesto \n";

}elseif(($año % 100) != 0 ){
    echo "No es año bisiesto \n";
}

$nota= intval(readline("Ingrese la calificacion \n"));


if  ($nota >=90 &&  $nota <=100 ) {
     echo"Excelente \n";
}
elseif ($nota >=80 AND $nota <=89 )  {
    echo"Bueno \n";
}
elseif ($nota >=70 &&  $nota <=79 ) {
    echo"Regular \n";
}
elseif  ($nota >=60 && $nota <=69 ) {
    echo"Aprobado \n";
}
elseif ($nota >=0 AND $nota <=59 ) {
    echo"Reprobado \n";
}
else {
    echo"Calificación inválida. Por favor, ingrese un número entre 0 y 100. \n";
}

$letra= readline("Ingrese cualquier letra \n");

if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u" ) {
    echo "La letra $letra Es una vocal. \n";
} else {
    echo "La letra $letra Es una consonante. \n";
}

$numero = intval(readline("Ingrese el numero"));

if ($numero /1 AND $numero / $numero) {
    echo"Es divisible \n";
}
else {
    echo"No es divisible \n";
}

$cuenta = intval(readline("Escribe el monto disponible \n"));

if ($cuenta >=1000) {
    echo "El precio total a pagar con descuento del 10% es \n". ($cuenta- (($cuenta*10)/100));
}
elseif($cuenta >= 500){
    echo "El precio tota a pagar con descuento del 5% es \n". ($cuenta-($cuenta * 0.05));
}else{
    echo "No se aplico el descuento \n";
}
$numero=readline("Ingrese un numero \n");
if ($numero>10){
echo "Correcto 10 es mayor que diez \n";
}
else if ($numero==10){
echo "correcto $numero es igual a 10 \n";
}
else{
    echo" El numero impreso es menor que diez \n";
}

$nombre = readline("Ingrese su nombre \n");
$juan = "juan";
if($nombre === $juan){
    echo "Hola juan \n";
}else{
    echo "lo siento, no eres juan \n";
}
$numero =intval(readline("Ingrese un numero del 1 al 7\n"));

if($numero <= 7){
    if ($numero == 1){
        echo "Dia lunes \n";
    }
    elseif ($numero == 2){
        echo "Dia martes \n";
    }
    elseif ($numero == 3){
        echo "Dia miercoles \n";
    }
    elseif ($numero == 4){
        echo "Dia jueves \n";
    }
    elseif ($numero == 5){
        echo "Dia viernes \n";
    }
    elseif($numero == 6){
        echo "Dia sabado \n";
    }
    elseif($numero == 7){
        echo "Dia domingo \n";
    }
}else{
    echo "Numero inválido \n";
}
$edad =readline("Ingrese su edad \n");

if ($edad >= 18){
    $licencia = readline("Tienes licencia de conducir \n");
    if ($licencia == "si"){
        echo "puedes conducir \n";
    }
    elseif ($licencia == "no"){
        echo "Debes obtener una licencia de conducir primero \n";
    }
}if($edad < 18){
    echo "No puedes conducir no tienes la edad sufuciente \n";
}
$numeroa =intval(readline("Numero A \n "));
$numerob =intval(readline("Numero B \n "));


if($numeroa > 10 && $numerob > 10){
    echo "Ambos numeros son mayores que 10 \n";
} elseif($numeroa >10 OR $numerob >10){
    echo "Solo uno de los numeros es mayor que 10 \n";
} else{
    echo "Ninguno de los números es mayor que 10 \n";
}
?>