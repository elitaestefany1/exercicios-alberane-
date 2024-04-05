<?php

function imprimirTabuada($numeroInteiroPositivo) {
    echo "Tabuada do $numeroInteiroPositivo:<br>";
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        $resultado = $numeroInteiroPositivo * $multiplicador;
        echo "$numeroInteiroPositivo x $multiplicador = $resultado <br>";
    }
}

// Número específico para a tabuada (no caso, 4)
$numeroInteiroPositivo = 4;

// Chamar a função para imprimir a tabuada de multiplicação do número específico
imprimirTabuada($numeroInteiroPositivo);

