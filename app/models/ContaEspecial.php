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

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getNumeroDaConta() {
        return $this->numeroDaConta;
    }

    public function setNumeroDaConta($numeroDaConta) {
        $this->numeroDaConta = $numeroDaConta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = (float)$saldo;
    }

    public function getLimite() {
        return $this->limite;
    }

    public function setLimite($limite) {
        $this->limite = (float)$limite;
    }

    public function depositar($valor) {
        $valor = (float)$valor;
        if ($valor > 0) {
            $this->saldo += $valor;
            return "Depósito realizado com sucesso.";
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

    // Método para exibir todos os dados da conta
    public function exibirDadosConta() {
        return sprintf(
            "Conta Especial\nTitular: %s\nNúmero da Conta: %s\nSaldo: R$ %.2f\nLimite: R$ %.2f\n",
            $this->titular,
            $this->numeroDaConta,
            $this->saldo,
            $this->limite
        );
    }
}

