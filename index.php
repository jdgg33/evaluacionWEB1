<?php

include("funcionesEvalua1.php");
//Nombre: Juan David Gomez Garcia

//Ejercicio 1
echo("Evaluacion 1, Elaborado por Juan David Gomez Garcia <br><br>");
echo("Ejercicio 1 <br><br>");
$n1=123;
$n2=456;

echo("N1 = ".$n1."<br>");
echo("N2 = ".$n2."<br><br>");

echo("Suma <br>");

$suma=$n1+$n2;

echo("la suma de los numeros n1 y n2 es : ".$suma."<br><br>");

echo("Resta <br>");
$resta=$n1-$n2;

echo("la resta de los numeros n1 y n2 es : ".$resta."<br><br>");

echo("Multipliacion <br>");
$multiplicacion=$n1*$n2;

echo("la multiplicacion de los numeros n1 y n2 es : ".$multiplicacion."<br><br>");

echo("Division <br>");
$division=$n1/$n2;
echo("la division de los numeros n1 y n2 es : ".$division."<br><br>");

//Ejercicio 2
/*La clasificación del IMC es la siguiente:
    • IMC <= 18,4 (Insuficiencia de peso)
    • 18,5<=IMC<=24,9 (Peso normal)
    • 25<=IMC<=29,9 (Sobrepeso)
    • 30<=IMC<=34,9 (Obesidad 1)
    • 35<=IMC<=39,9 (Obesidad 2)
    • IMC>=40 (Obesidad 3)
*/
echo("<br><br>Ejercicio 2 <br><br>");
echo("calcular el índice de masa corporal <br>");

$peso=85;
$altura=1.78;
echo("<br>El peso del usuario es =".$peso." kg <br>");
echo("<br>la altura del usuario es =".$altura." m <br>");
$imc=$peso/($altura*$altura);

echo("<br>El Indice de masa corporal del usuario es =".$imc."<br>");

if($imc<= 18.4){
    echo("El usuario tiene Insuficiencia de peso <br>");
}else if($imc>=18.5 && $imc<=24.9){
    echo("El usuario tiene Peso normal <br>");
}else if($imc>=25 && $imc<=29.9){
    echo("El usuario tiene sobrepeso <br>");
}else if($imc>=30 && $imc<=34.9){
    echo("El usuario tiene Obesidad 1 <br>");
}else if($imc>=35 && $imc<=39.9){
    echo("El usuario tiene Obesidad 2 <br>");
}else{
    echo("El usuario tiene Obesidad 3 <br>");
}

//Ejercicio 3
/*
3.Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta
dependerá del número de zapatos que se compren Si son 3 pares se les dará un 10 de descuento sobre el total de la
compra si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20 de descuento y si son
más 5 pares de zapatos se otorgará un 40 de descuento Defina la cantidad de variables que necesite, el precio de cada
par de zapatos 150 000 y establezca el valor total de una compra de 5 pares de zapatos
*/
echo("<br><br> Ejercicio 3 <br><br>");
echo("Promocion Descuentos <br>");

$Cantzapatosvendidos=5;
$Precioparzapatos=150000;
echo("Cantidad de zapatas vendidos : ".$Cantzapatosvendidos." <br>");

$valorneto=$Cantzapatosvendidos*$Precioparzapatos;
echo("Valor total sin descuento : $".$valorneto." <br>");

if($Cantzapatosvendidos== 3){
    $descuento=$valorneto*0.1;
    $valor=$valorneto-$descuento;
    echo("El valor a pagar con descuento es : $ ".$valor. " El descuento fue del 10% de : ".$descuento." <br>");
}else if($Cantzapatosvendidos> 3 && $Cantzapatosvendidos<= 5){
    $descuento=$valorneto*0.2;
    $valor=$valorneto-$descuento;
    echo("El valor a pagar con descuento es : $".$valor. " El descuento fue del 20% de : ".$descuento." <br>");
}else if($Cantzapatosvendidos> 5 ){
    $descuento=$valorneto*0.4;
    $valor=$valorneto-$descuento;
    echo("El valor a pagar con descuento es : $".$valor. " El descuento fue del 40% de : ".$descuento." <br>");
}else{
    
    echo("El valor a pagar es : $".$valorneto." <br>");
}

//Ejercicio 4
/*
4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
trabaja 40 horas o menos, se le pagará 20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
pagarán a 25 por hora Ejecute su código para calcular el salario con 36 horas trabajadas
*/
echo("<br><br> Ejercicio 4 <br><br>");
echo("Sueldo Semanal <br>");

$horaslaboradas=36;

echo("Horas laboradas : $".$horaslaboradas."<br>");

if($horaslaboradas<=40){
    $pago=$horaslaboradas*20000;
    echo("Sueldo Semanal es : $".$pago."<br>");
    echo("valor hora es de $20000 <br>");

}else{
    $pago=$horaslaboradas*25000;
    echo("Sueldo Semanal es : $".$pago."<br>");
    echo("valor hora es de $25000 <br>");
}



//Ejercicio 5
/*
5.Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar
información de nombre, teléfono, dirección y salario de 5 usuarios de una sucursal llamada sucursal A Además, su
programa debe estar en la capacidad de sumar todos los salarios de los usuarios de la sucursal A en una sola variable
llamada sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensual es de
20 000 000 y la sucursal C cuyo valor de salarios mensuales es de 15 000 000 Permita que su código muestre cual sucursal
tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal
A
*/

echo("<br><br> Ejercicio 5 <br><br>");
echo("Almacenar Datos sucursal A <br>");

$sucursalA=array('usuario1'=>array('Nombre'=>"Juan",'Telefono'=>1234567,'Direccion'=>"Calle 1",'Salario'=>1000000),
                'usuario2'=>array('Nombre'=>"Maria",'Telefono'=>2345678,'Direccion'=>"Calle 2",'Salario'=>1500000),
                'usuario3'=>array('Nombre'=>"James",'Telefono'=>3456789,'Direccion'=>"Calle 3",'Salario'=>200000),
                'usuario4'=>array('Nombre'=>"Sandra",'Telefono'=>4567890,'Direccion'=>"Calle 4",'Salario'=>2500000),
                'usuario5'=>array('Nombre'=>"David",'Telefono'=>5678901,'Direccion'=>"Calle 5",'Salario'=>3000000));


foreach($sucursalA as $clavemayorunidimensional=>$sucursalA){    
    echo ("<br>Los datos del ".$clavemayorunidimensional." de la Sucursal A, son :<br>");
    foreach ($sucursalA as $clave=>$valor){
    echo($clave." es : ".$valor."<br>");
    }
}
    $salariosSucursalA=sumatoriaSalarios(1000000,1500000,200000,2500000,3000000);
    
    
if($salariosSucursalA>20000000 && $salariosSucursalA>15000000){
    echo("<br>La mejor sumatoria de salarios la tiene la Sucursal A ");
    echo ("<br>Los salarios de la sucursal A suman : $".$salariosSucursalA."<br>");
}else{
    echo("<br>La mejor sumatoria de salarios la tiene la Sucursal B :$20'000.000");
    echo ("<br>Los salarios de la sucursal A suman : $".$salariosSucursalA."<br>");
}


echo("<br><br>................................<br><br>");


//Ejercicio 6
/*
6. Almacena en un Array los 10 primeros números pares. Imprima en pantalla cada uno de estos, en una línea diferente con el siguiente
formato:
El 1° numero par es: 2
El 2° numero par es: 4
*/
echo("<br><br> Ejercicio 6 <br><br>");
echo("Numeros Pares<br>");

$pares=array(0,2,4,6,8,10,12,14,16,18,20);
for($numerosPares=1; $numerosPares<count($pares); $numerosPares++){
    echo("El numero par es ".$pares[$numerosPares]."<br>");
}

echo("<br><br>................................<br><br>");

//Ejercicio 7
/*
7. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados 
los valores de dicha consulta en un arreglo denominado salpicon, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[acido3]=>”Lulo”
*/
echo("<br><br> Ejercicio 7 <br><br>");
echo("Salpicon<br>");

$Salpicon=array('dulce1'=>"Banano,",'dulce2'=>"Manzana,",'dulce3'=>"Durazno,",'acido1'=>"Piña,",'acido2'=>"Naranja,",'acido3'=>"Lulo");
 
    echo ("<br>El salpicon esta compuesto por: <br>");
    print_r($Salpicon);

echo("<br><br>................................<br><br>");

//Ejercicio 8
/*
8. La federación nacional de fútbol necesita de sus servicios como desarrollador de software, 
para codificar una función en PHP que permita calcular la edad de los jugadores, 
de acuerdo al año de nacimiento de estos. Declare la función calcularEdad() y pruebe su funcionamiento
con los años de nacimiento 1991,1995,1987.
*/
echo("<br><br> Ejercicio 8 <br><br>");
echo("Salpicon<br>");




?>