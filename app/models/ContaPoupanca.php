<?php

namespace app\models;

class ContaPoupanca {
    private $titular;
    private $numeroConta;
    private $saldo;
    private $dataAniversario;

    // Construtor que permite inicializar com valores
    public function __construct($titular = '', $numeroConta = '', $saldo = 0.0, $dataAniversario = null) {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = (float)$saldo;
        $this->dataAniversario = $dataAniversario;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function setNumeroConta($numeroConta) {
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = (float)$saldo;
    }

    public function getDataAniversario() {
        return $this->dataAniversario;
    }

    public function setDataAniversario($dataAniversario) {
        $this->dataAniversario = $dataAniversario;
    }

    // Método para exibir todos os dados da conta
    public function exibirDadosConta() {
        return sprintf(
            "Conta Poupança\nTitular: %s\nNúmero da Conta: %s\nSaldo: R$ %.2f\nData de Aniversário: %s\n",
            $this->titular,
            $this->numeroConta,
            $this->saldo,
            $this->dataAniversario
        );
    }
}


