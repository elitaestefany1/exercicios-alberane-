<?php

function bubbleSort($arr) {
	$n = count($arr);

	for ($i = 0; $i < $n - 1; $i++) {
		for ($j = 0; $j < $n - $i - 1; $j++) {
			
			
			
			if ($arr[$j] > $arr[$j + 1]) {
				$temp = $arr[$j];
				$arr[$j] = $arr[$j + 1];
				$arr[$j + 1] = $temp;
			}
		}
	}
	return $arr;
}

$cor = array("lilas", "azul", "verde");
$sortedArray = bubbleSort($cor); 

// Imprime o array ordenado
echo "Sorted array: " . implode(", ", $sortedArray);
