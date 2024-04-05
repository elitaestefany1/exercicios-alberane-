<?php
// Função para imprimir todos os divisores de um número inteiro positivo
function imprimirDivisores($numeroInteiroPositivo) {
    echo "Divisores de $numeroInteiroPositivo:<br>";
    for ($divisor = 1; $divisor <= $numeroInteiroPositivo; $divisor++) {
        if ($numeroInteiroPositivo % $divisor == 0) {
            echo "$divisor é divisor de $numeroInteiroPositivo<br>";
        }
    }
}

// Ler o número inteiro positivo (por exemplo, 12)
$numeroInteiroPositivo = 4;

// Chamar a função para imprimir todos os divisores do número lido
imprimirDivisores($numeroInteiroPositivo);
