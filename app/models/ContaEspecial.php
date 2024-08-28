<?php

namespace app\models;

class Especial {
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
        } else {
            echo "O valor do depósito deve ser positivo.";
        }
    }

    public function sacar($valor) {
        $valor = (float)$valor;
        if ($valor > 0 && $valor <= $this->saldo + $this->limite) {
            $this->saldo -= $valor;
            return true;
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.";
            return false;
        }
    }
}

