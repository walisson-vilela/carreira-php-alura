<?php
    //1. Exibir nome completo
    echo "Walisson Vilela\n";

    //2. Média Aritmética
    $nota1 = 3;
    $nota2 = 5;
    $nota3 = 2;
    $soma = $nota1 + $nota2 + $nota3;
    echo "Soma das notas: " . $soma . "\n";
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "Média Aritmética: " . $media . "\n";

    //3. conversao metros para centimetros
    $metros = 5;
    $centimetros = $metros * 100;
    echo "Valor em centímetros: " . $centimetros . " cm\n";

    //4. Calcular se ano é bissexto
    $ano = 2020;
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo $ano . " é um ano bissexto.\n";
    } else {
        echo $ano . " não é um ano bissexto.\n";
    }

    //5. Converter temperatura em Celsius para Fahrenheit
    $celsius = 25;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo $celsius . "°C é igual a " . $fahrenheit . "°F\n";     