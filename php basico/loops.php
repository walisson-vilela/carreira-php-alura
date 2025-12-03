<?php

//1. Exibir numeros impares de 1 a 100  
for ($i = 1; $i <= 100; $i += 2) {
    echo $i . "\n";
}

//2. Calcule o img e exiba a classificaçãp do imc   
$peso = 70; // em kg
$altura = 1.75; // em metros
$imc = $peso / ($altura * $altura);
echo "IMC: " . $imc . "\n"; 

//3. Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
$hora = 14; // Exemplo de hora
if ($hora < 12) {
    echo "Bom dia\n";
} elseif ($hora < 18) {
    echo "Boa tarde\n";
} else {
    echo "Boa noite\n";
}