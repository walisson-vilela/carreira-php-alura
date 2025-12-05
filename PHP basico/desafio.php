<?php

$nome = "Walisson Vilela";
$saldo = 0;
   echo "******************\n";

    echo "Titular: " . $nome . "\n";
    echo "Saldo atual: R$ " . number_format($saldo, 2, ',', '.') . "\n";

    echo "******************\n";


do{
    echo "Escolha uma opção: \n";
    echo "1. Consultar saldo atual \n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor \n";
    echo "4. Sair \n";
 
    $opcao = (int) fgets(STDIN);

    switch($opcao){
        case 1:
            echo "Seu saldo atual é R$ " . number_format($saldo, 2, ',', '.') . "\n";
            break;
        case 2:
            echo "Informe o valor para saque: ";
            $valorSaque = floatval(str_replace(',', '.', trim(fgets(STDIN))));
            if($valorSaque > $saldo){
                echo "Saldo insuficiente para saque de R$ " . number_format($valorSaque, 2, ',', '.') . "\n";
            } else {
                $saldo -= $valorSaque;
                echo "Saque de R$ " . number_format($valorSaque, 2, ',', '.') . " realizado com sucesso. Novo saldo: R$ " . number_format($saldo, 2, ',', '.') . "\n";
            }
            break;
        case 3:
            echo "Informe o valor para depósito: ";
            $valorDeposito = floatval(str_replace(',', '.', trim(fgets(STDIN))));
            $saldo += $valorDeposito;
            echo "Depósito de R$ " . number_format($valorDeposito, 2, ',', '.') . " realizado com sucesso. Novo saldo: R$ " . number_format($saldo, 2, ',', '.') . "\n";
            break;
        case 4:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida. Por favor, selecione uma opção válida.\n";
            break;
    }

} while ($opcao != 4);

