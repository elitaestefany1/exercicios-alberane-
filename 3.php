<<?php

$numero = 1;
$total = 1;
$continua = true;
$contador = 1;

while($continua){

$numero = readline("Digite um valor: ");
if($numero > 1){
    $total = $total + $numero;
    $contador++;
}

if($numero < 0){
    echo "A média é: ". $total / $contador;
    $continua = false;
}

}