<?php
$numero = 50; // Corrigido: Adicionado ponto e vírgula no final da linha
$gerador = rand(1, 100);

if ($numero <= $gerador) {
    echo "O número é menor ou igual ao valor gerado.";
}
 else {
    echo "O número é maior do que o valor gerado.";
}
