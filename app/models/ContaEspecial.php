<?php

namespace app\models;

class ContaEspecial {
    private $titular;
    private $numeroDaConta;
    private $saldo;
    private $limite;

    public function __construct($titular, $numeroDaConta, $saldo, $limite) {
        $this->titular = $titular;
        $this->numeroDaConta = $numeroDaConta;
        $this->saldo = (float)$saldo;
        $this->limite = (float)$limite;
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

    public function getLimite() {
        return $this->limite;
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
        if ($valor > 0 && $valor <= $this->saldo + $this->limite) {
            $this->saldo -= $valor;
            return true;
        } else {
            return "Saldo insuficiente ou valor inválido para saque.";
        }
    }

    public function exibirDadosConta() {
        return sprintf(
            "=== Informações da Conta Especial ===\nTitular: %s\nNúmero da Conta: %s\nSaldo: R$ %s\nLimite: R$ %s\n",
            $this->titular,
            $this->numeroDaConta,
            number_format($this->saldo, 2, ',', '.'),
            number_format($this->limite, 2, ',', '.')
        );
    }
}

