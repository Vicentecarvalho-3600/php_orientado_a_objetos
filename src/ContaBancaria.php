<?php

namespace App;

class ContaBancaria
{

    public string $banco = "Banco inter";
    public string $nomeTitular = "Vicente Carvalho";
    public string $numeroAgencia = "8052";
    public string $numeroConta = "57545-0";
    public float $saldo = 0;

    public function exibirDadosDaContaCliente(): array
    {

        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo
        ];
    }

}




?>