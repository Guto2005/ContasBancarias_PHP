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

    public function depositar($valor) {
        $valor = (float)$valor;
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            return "O valor do depósito deve ser positivo.";
        }
    }

    public function sacar($valor) {
        $valor = (float)$valor;
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        } else {
            return "Saldo insuficiente ou valor inválido para saque.";
        }
    }

    public function exibirDadosConta() {
        return "=== Informações da Conta Poupança ===\n" .
               "Titular: " . $this->titular . "\n" .
               "Número da Conta: " . $this->numeroConta . "\n" .
               "Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "\n" .
               "Data de Aniversário: " . $this->dataAniversario . "\n";
    }
}






