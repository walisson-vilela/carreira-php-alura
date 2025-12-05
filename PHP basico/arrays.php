<?php
//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
$numeros = [1, 2, 2, 3, 4, 4, 5];

for($i = 0 ; $i < count($numeros); $i++) {
    for($j = $i + 1; $j < count($numeros); $j++) {
        if($numeros[$i] == $numeros[$j]) {
            unset($numeros[$j]);
        }
    }
}

$numeros = array_values($numeros);
print_r($numeros);



$notas = ["Marcos" => 7, "Ana" => 4, "João" => 6, "Maria" => 9];

foreach($notas as $nome => $nota) {
   if($nota >= 6){
    echo "$nome foi aprovado com a nota $nota\n";
   } else {
    echo "$nome foi reprovado com a nota $nota\n";
   }
}