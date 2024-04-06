<?php

function imprimirTabuada($numeroInteiroPositivo) {
    echo "Tabuada do $numeroInteiroPositivo:<br>";
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        $resultado = $numeroInteiroPositivo * $multiplicador;
        echo "$numeroInteiroPositivo x $multiplicador = $resultado <br>";
    }
}


$numeroInteiroPositivo = 4;


imprimirTabuada($numeroInteiroPositivo);

