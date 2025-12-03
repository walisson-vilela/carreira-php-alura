<?php

//1. Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
function exibirNumeros(int $numero01, int $numero02) {
    return $numero01 + $numero02;
}

$soma = exibirNumeros(10, 15);
echo "A soma é: $soma\n";


//2. Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
function calcularIMC(float $altura, float $peso): float {
    return $peso / ($altura * $altura);
}   
$imc = calcularIMC(1.75, 70);
echo "O IMC é: $imc\n";

//3. Crie uma função em PHP que converta graus celsius para Fahrenheit.
function celsiusParaFahrenheit(float $celsius): float {
    return ($celsius * 9/5) + 32;
}       
$fahrenheit = celsiusParaFahrenheit(25);
echo "A temperatura em Fahrenheit é: $fahrenheit\n";

//4. Crie uma função em PHP que receba uma string e retorne a mesma string invertida.
function inverterString(string $texto): string {
    return strrev($texto);
}
$textoInvertido = inverterString("Olá Mundo");
echo "Texto invertido: $textoInvertido\n";

