<?

$altura = 1.90;
$peso = 120;



$imc = $peso / ($altura ** 2);

$dicionario = [
    18.5 => "Abaixo do peso",
    24.9 => "Peso normal",
    29.9 => "Sobrepeso",
    34.9 => "Obesidade grau 1",
    39.9 => "Obesidade grau 2",
    40.0 => "Obesidade grau 3"
];

foreach($dicionario as $key => $value){
    
    if($key < 40.0){
        if($imc <= $key){
            echo PHP_EOL."$value";
            break;
        }
    }else{ 
        echo PHP_EOL."$value";
    }
}