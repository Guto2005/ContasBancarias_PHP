<?php

namespace app\models;

class ContaPoupanca {
    private $titular;
    private $numeroConta;
    private $saldo;
    private $dataAniversario;

    public function __construct($titular = '', $numeroConta = '', $saldo = 0.0, $dataAniversario = null) {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = (float)$saldo;
        $this->dataAniversario = $dataAniversario;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getDataAniversario() {
        return $this->dataAniversario;
    }

    public function exibirDadosConta() {
        return sprintf(
            "=== Informações da Conta Poupança ===\nTitular: %s\nNúmero da Conta: %s\nSaldo: R$ %s\nData de Aniversário: %s\n",
            $this->titular,
            $this->numeroConta,
            number_format($this->saldo, 2, ',', '.'),
            $this->dataAniversario
        );
    }
}


