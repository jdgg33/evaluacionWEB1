<?php

//Funcion para calcular la edad de una persona

function sumatoriaSalarios($salario1,$salario2,$salario3,$salario4,$salario5){
    
    $salariosSucursalA=$salario1+$salario2+$salario3+$salario4+$salario5;
    
    return $salariosSucursalA;
}

function calcularedad3($fechanacimiento,$actual){
    $edad=$actual-$fechanacimiento;
    return($edad);
}

?>