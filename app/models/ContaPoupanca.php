<?php

namespace app\models;

class ContaPoupanca {
    private $titular;
    private $numeroDaConta;
    private $saldo;
    private $dataAniversario;

    public function __construct($titular, $numeroDaConta, $saldo, $dataAniversario) {
        $this->titular = $titular;
        $this->numeroDaConta = $numeroDaConta;
        $this->saldo = (float)$saldo;
        $this->dataAniversario = $dataAniversario;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getNumeroDaConta() {
        return $this->numeroDaConta;
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

    public function transferir($valor, ContaPoupanca $contaDestino) {
        $valor = (float)$valor;
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            $contaDestino->depositar($valor);
            return true;
        } else {
            return "Saldo insuficiente ou valor inválido para transferência.";
        }
    }

    public function exibirDadosConta() {
        return "=== Informações da Conta Poupança ===\n" .
               "Titular: " . $this->titular . "\n" .
               "Número da Conta: " . $this->numeroDaConta . "\n" .
               "Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "\n" .
               "Data de Aniversário: " . $this->dataAniversario . "\n";
    }
}












