<?php

// Praticar é muito importante! Por isso, preparamos um exercício para você colocar em prática o conteúdo abordado nesta aula.

// Levando em consideração o código a seguir:

/*
class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function setSaldoEmCentavos(int $saldoEmCentavos): void
    {
        $this->saldoEmCentavos = $saldoEmCentavos;
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}*/


// Como podemos torná-lo um pouco mais robusto, impedindo que o saldo seja manipulado livremente, por exemplo? Altere o código da classe para que o saldo seja alterado somente através das operações de saque e depósito.


class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function depositar(int $valorADepisitar): void
    {
        if ($valorADepisitar <= 0) {
            echo "Valor inválido para depósito.\n";
            return;
        }
        $this->saldoEmCentavos += $valorADepisitar;
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar <= 0) {
            echo "Valor inválido para saque.\n";
            return;
        }
        if ($valorASacar > $this->saldoEmCentavos) {
            echo "Saldo insuficiente para saque.\n";
            return;
        }
        $this->saldoEmCentavos -= $valorASacar;
    }

    public function nomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function numeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }
}