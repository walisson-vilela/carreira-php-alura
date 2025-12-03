<?php
//. Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
$notas = [8.5, 7.0, 9.3, 6.8, 8.0, 9.5, 7.5];
rsort($notas);
$maioresNotas = array_slice($notas, 0, 3);
echo "As 3 maiores notas são: " . implode(", ", $maioresNotas) . "\n";

//2. Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.
$dados = "Vinicius Dias,1997,Programador";
$arrayDados = explode(",", $dados);
print_r($arrayDados);       

//3. Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.
function ordenarArrayAlfabeticamente(array $strings): array {
    sort($strings);
    return $strings;
}   

$nomes = ["Carlos", "Ana", "Beatriz", "Daniel"];
$nomesOrdenados = ordenarArrayAlfabeticamente($nomes);
print_r($nomesOrdenados);