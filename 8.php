<?php

function cowsay($message) {
    $cow = <<<COW
        < $message >
         \   ^__^
          \  (oo)___
             (__)\       )\
                 ||----w|| \\
                   
COW;
    echo $cow . PHP_EOL;
}

cowsay("olá, boraa Élita");

