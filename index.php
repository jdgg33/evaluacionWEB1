<?php

include("funcionesEvalua1.php");
//Nombre: Juan David Gomez Garcia

//Ejercicio 1
echo("<b><u><big>Evaluacion 1, Elaborado por Juan David Gomez Garcia </big></u></b> <br><br>");
echo("<b><u><big> Ejercicio 1 </big></u></b> <br><br>");
$n1=1234;
$n2=567;

echo("N1 = ".$n1."<br>");
echo("N2 = ".$n2."<br><br>");

$suma=$n1+$n2;
$resta=$n1-$n2;
$multiplicacion=$n1*$n2;
$division=$n1/$n2;

echo("<b> Suma </b> <br>");
echo("la suma de los numeros N1 y N2 es : ".$suma."<br><br>");

echo("<b> Resta </b> <br>");
echo("la resta de los numeros N1 y N2 es : ".$resta."<br><br>");

echo("<b> Multipliacion </b> <br>");
echo("la multiplicacion de los numeros N1 y N2 es : ".$multiplicacion."<br><br>");

echo("<b> Division </b> <br>");
echo("la division de los numeros N1 y N2 es : ".$division."<br><br>");

echo("<br><br>................................<br><br>");

//Ejercicio 2
/*La clasificación del IMC es la siguiente:
    • IMC <= 18,4 (Insuficiencia de peso)
    • 18,5<=IMC<=24,9 (Peso normal)
    • 25<=IMC<=29,9 (Sobrepeso)
    • 30<=IMC<=34,9 (Obesidad 1)
    • 35<=IMC<=39,9 (Obesidad 2)
    • IMC>=40 (Obesidad 3)
*/
echo("<br><br><b><u><big> Ejercicio 2 </big></u></b> <br><br>");
echo("<b><u><big> Calcular el índice de masa corporal </big></u></b> <br>");

$peso=85;
$altura=1.78;
echo("<br>El peso del usuario es =".$peso." kg <br>");
echo("<br>la altura del usuario es =".$altura." m <br>");
$imc=$peso/($altura*$altura);

echo("<br> <b> El Indice de masa corporal del usuario es =".$imc."</b> <br>");

if($imc<= 18.4){
    echo("<b> El usuario tiene Insuficiencia de peso </b> <br>");
}else if($imc>=18.5 && $imc<=24.9){
    echo("<b> El usuario tiene Peso normal </b> <br>");
}else if($imc>=25 && $imc<=29.9){
    echo("<b> El usuario tiene sobrepeso </b> <br>");
}else if($imc>=30 && $imc<=34.9){
    echo("<b> El usuario tiene Obesidad 1 </b> <br>");
}else if($imc>=35 && $imc<=39.9){
    echo("<b> El usuario tiene Obesidad 2 </b> <br>");
}else{
    echo("<b> El usuario tiene Obesidad 3 </b> <br>");
}

echo("<br><br>................................<br><br>");

//Ejercicio 3
/*
3.Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta
dependerá del número de zapatos que se compren Si son 3 pares se les dará un 10 de descuento sobre el total de la
compra si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20 de descuento y si son
más 5 pares de zapatos se otorgará un 40 de descuento Defina la cantidad de variables que necesite, el precio de cada
par de zapatos 150 000 y establezca el valor total de una compra de 5 pares de zapatos
*/
echo("<br><br><b><u><big> Ejercicio 3 </big></u></b> <br><br>");
echo("<b><u><big> Promocion Descuentos </big></u></b> <br><br>");

$Cantzapatosvendidos=5;
$Precioparzapatos=150000;
echo("Cantidad de zapatas vendidos : ".$Cantzapatosvendidos." <br>");

$valorneto=$Cantzapatosvendidos*$Precioparzapatos;
echo("Valor total sin descuento : $".$valorneto." <br>");

if($Cantzapatosvendidos== 3){
    $descuento=$valorneto*0.1;
    $valor=$valorneto-$descuento;
    echo("<b> El valor a pagar con descuento es : $ ".$valor. " El descuento fue del 10% de : ".$descuento."</b> <br>");
}else if($Cantzapatosvendidos> 3 && $Cantzapatosvendidos<= 5){
    $descuento=$valorneto*0.2;
    $valor=$valorneto-$descuento;
    echo("<b> El valor a pagar con descuento es : $".$valor. " El descuento fue del 20% de : ".$descuento."</b> <br>");
}else if($Cantzapatosvendidos> 5 ){
    $descuento=$valorneto*0.4;
    $valor=$valorneto-$descuento;
    echo("<b> El valor a pagar con descuento es : $".$valor. " El descuento fue del 40% de : ".$descuento."</b> <br>");
}else{
    
    echo("<b> El valor a pagar es : $".$valorneto."</b> <br>");
}

echo("<br><br>................................<br><br>");

//Ejercicio 4
/*
4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
trabaja 40 horas o menos, se le pagará 20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
pagarán a 25 por hora Ejecute su código para calcular el salario con 36 horas trabajadas
*/
echo("<br><br><b><u><big> Ejercicio 4 </big></u></b> <br><br>");
echo("<b><u><big> Sueldo Semanal </big></u></b> <br><br>");

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

echo("<br><br>................................<br><br>");

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

echo("<br><br><b><u><big> Ejercicio 5 </big></u></b> <br><br>");
echo("<b><u><big> Almacenar Datos sucursal A </big></u></b> <br>");

$sucursalA=array('usuario1'=>array('Nombre'=>"Juan",'Telefono'=>1234567,'Direccion'=>"Carrera 1",'Salario'=>1500000),
                'usuario2'=>array('Nombre'=>"Maria",'Telefono'=>2345678,'Direccion'=>"Carrera 2",'Salario'=>1700000),
                'usuario3'=>array('Nombre'=>"James",'Telefono'=>3456789,'Direccion'=>"Carrera 3",'Salario'=>230000),
                'usuario4'=>array('Nombre'=>"Sandra",'Telefono'=>4567890,'Direccion'=>"Carrera 4",'Salario'=>2800000),
                'usuario5'=>array('Nombre'=>"David",'Telefono'=>5678901,'Direccion'=>"Carrera 5",'Salario'=>3200000));


foreach($sucursalA as $clavemayorA=>$sucursalA){    
    echo ("<br>Los datos del ".$clavemayorA." de la Sucursal A, son :<br>");
    foreach ($sucursalA as $clave=>$valor){
    echo("<b>".$clave." es : </b> ".$valor."<br>");
    }
}
    $salariosSucursalA=sumatoriaSalarios(1500000,1700000,230000,2800000,3200000);
    
    
if($salariosSucursalA>20000000 && $salariosSucursalA>15000000){
    echo("<br><b> La mejor sumatoria de salarios la tiene la Sucursal A </b>");
    echo ("<br><b> Los salarios de la sucursal A suman : $".$salariosSucursalA."</b> <br>");
}else{
    echo("<br><b> La mejor sumatoria de salarios la tiene la Sucursal B :$20'000.000 </b>");
    echo ("<br><b> Los salarios de la sucursal A suman : $".$salariosSucursalA."</b> <br>");
}


echo("<br><br>................................<br><br>");


//Ejercicio 6
/*
6. Almacena en un Array los 10 primeros números pares. Imprima en pantalla cada uno de estos, en una línea diferente con el siguiente
formato:
El 1° numero par es: 2
El 2° numero par es: 4
*/
echo("<br><br><b><u><big> Ejercicio 6 </big></u></b> <br><br>");
echo("<b><u><big> Numeros Pares </big></u></b> <br><br>");

$pares=array('1°'=>2,'2°'=>4,'3°'=>6,'4°'=>8,'5°'=>10,'6°'=>12,'7°'=>14,'8°'=>16,'9°'=>18,'10°'=>20);
foreach ($pares as $clavepares=>$valorpares){
    echo("El ".$clavepares." numero par es: ".$valorpares."<br>");
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
echo("<br><br><b><u><big> Ejercicio 7 </big></u></b> <br><br>");
echo("<b><u><big> Salpicon </big></u></b> <br>");

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

echo("<br><br><b><u><big> Ejercicio 8 </big></u></b> <br><br>");
echo("<b><u><big> Calcular Edad </big></u></b> <br><br>");

// $edad=array('1991'=>calcularedad(2020,1991), '1995'=>calcularedad(2020,1995), '1987'=>calcularedad(2020,1987));
// foreach ($edad as $claveedades=>$valoredades){
//     echo("Si usted nacio en ".$claveedades." usted tiene: ".$valoredades."<br>");
// }

calcularedad(1991,2020);
calcularedad(1995,2020);
calcularedad(1987,2020);


echo("<br><br>................................<br><br>");

//Ejercicio 9
/*
9. La federación nacional de fútbol también necesita que usted codifique una nueva función 
para establecer el biotipo de los jugadores teniendo en cuenta la estatura de estos. 
La clasificación internacional del Biotipo de futbolista es:
Estatura <1.70 m (Biotipo Bajo)
1.70 m <=Estatura < 1.80 m (Biotipo Promedio)
Estatura >= 1,80 m (Biotipo Superior)

Ejecute 3 veces su función para las estaturas 1.65 m, 1.78 m y 1.95 m
*/

echo("<br><br><b><u><big> Ejercicio 9 </big></u></b> <br><br>");
echo("<b><u><big> Establecer el biotipo de los jugadores </big></u></b> <br><br>");

biotipojugadores(1.65);
biotipojugadores(1.78);
biotipojugadores(1.95);

echo("<br><br>................................<br><br>");

//Ejercicio 10
/*
10. El seleccionador nacional de la selección de fútbol de Colombia Carlos Queiroz, 
necesita de sus servicios como desarrollador de software, 
para almacenar y organizar la información de los mejores jugadores colombianos alrededor del mundo, 
para ello el le suministra la siguiente información:

JUGADOR             AÑO NACIMIENTO      POSICION        ESTATURA
Radamel Falcao      1986                Delantero       1,77 m
James Rodríguez     1991                Mediocampista   1,81 m
Juan Cuadrado       1988                Delantero       1,78 m
Yerry Mina          1994                Defensor        1,95 m
David Ospina        1988                Portero         1,83 m
Davinsón Sanchez    1996                Defensor        1,87 m
Duvan Zapata        1991                Delantero       1,86 m
Wilmar Barrios      1993                Mediocampista   1,78 m
Mateus Uribe        1991                MedioCampista   1,80 m

Cree un arreglo multidimensional donde guarde la información de cada jugador 
calculando la edad y el biotipo de estos a partir de los datos 
suministrados por Queiroz y muestre los resultados en pantalla uno a uno.
*/

echo("<br><br><b><u><big> Ejercicio 10 </big></u></b> <br><br>");
echo("<b><u><big> Almacenar y Organizar la informacion de los mejores jugadores Colombianos </big></u></b> <br><br>");

$jugadores=array(
    'Jugador 1'=>array('Nombre'=>"Radamel Falcao",'Años'=>calcularedadjugadores(1986,2020),'Posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.77)),
    'Jugador 2'=>array('Nombre'=>"James Rodríguez",'Años'=>calcularedadjugadores(1991,2020),'Posicion'=>"Mediocampista",'Biotipo'=>biotipojugadores10(1.81)),
    'Jugador 3'=>array('Nombre'=>"Juan Cuadrado",'Años'=>calcularedadjugadores(1988,2020),'Posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.78)),
    'Jugador 4'=>array('Nombre'=>"Yerry Mina",'Años'=>calcularedadjugadores(1994,2020),'Posicion'=>"Defensor",'Biotipo'=>biotipojugadores10(1.95)),
    'Jugador 5'=>array('Nombre'=>"David Ospina",'Años'=>calcularedadjugadores(1988,2020),'Posicion'=>"Portero",'Biotipo'=>biotipojugadores10(1.83)),
    'Jugador 6'=>array('Nombre'=>"Davinsón Sanchez",'Años'=>calcularedadjugadores(1996,2020),'Posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.87)),
    'Jugador 7'=>array('Nombre'=>"Duvan Zapata",'Años'=>calcularedadjugadores(1991,2020),'Posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.86)),
    'Jugador 8'=>array('Nombre'=>"Wilmar Barrios",'Años'=>calcularedadjugadores(1993,2020),'Posicion'=>"Mediocampista",'Biotipo'=>biotipojugadores10(1.78)),
    'Jugador 9'=>array('Nombre'=>"Mateus Uribe",'Años'=>calcularedadjugadores(1991,2020),'Posicion'=>"Mediocampista",'Biotipo'=>biotipojugadores10(1.80)));  

    foreach($jugadores as $clavemayorjugadores=>$jugadores){    
    echo ("<br><b> Los datos del ".$clavemayorjugadores.", son :</b> <br>");
    foreach ($jugadores as $clave=>$valor){
    echo("<b>".$clave."</b> : ".$valor."<br>");
    }
}

echo("<br><br>................................<br><br>");


?>