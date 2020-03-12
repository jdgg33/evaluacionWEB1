<?php

//Ejercicio 5

function sumatoriaSalarios($salario1,$salario2,$salario3,$salario4,$salario5){
    
    $salariosSucursalA=$salario1+$salario2+$salario3+$salario4+$salario5;
    
    return $salariosSucursalA;
}

//Ejercicio 8

// function calcularedad($actual,$fechanacimiento){
//     $edad=$actual-$fechanacimiento;
//     return($edad);
// }

function calcularedad($nacimiento,$actual){
    $edad=$actual-$nacimiento;
       echo("Si usted nacio en ".$nacimiento." usted tiene: ".$edad." años. <br>");
}


//Ejercicio 9

function biotipojugadores($biotipo){
    $biotipo1="Biotipo Bajo";
    $biotipo2="Biotipo Promedio";
    $biotipo3="Biotipo Superior";
if ($biotipo<1.70){
        echo("Para la altura de ".$biotipo."m, su biotipo es: ".$biotipo1."<br>");
    }elseif($biotipo>=1.70 && $biotipo<1.80){
            echo("Para la altura de ".$biotipo."m, su biotipo es: ".$biotipo2."<br>");
        }elseif($biotipo>=1.80){
                echo("Para la altura de ".$biotipo."m, su biotipo es: ".$biotipo3."<br>");
    }
        
}

//Ejercicio 10

function calcularedadjugadores($nacimiento,$actual){
    $edad=$actual-$nacimiento;
       return ($edad);
}

function biotipojugadores10($biotiposjugadores){
    $biotipos1="Biotipo Bajo";
    $biotipos2="Biotipo Promedio";
    $biotipos3="Biotipo Superior";
if ($biotiposjugadores<1.70){
        return($biotipos1);
    }elseif($biotiposjugadores>=1.70 && $biotiposjugadores<1.80){
            return($biotipos2);
        }elseif($biotiposjugadores>=1.80){
                return($biotipos3);
    }
        
}

?>