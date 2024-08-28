<?php

namespace app\models;

class Poupanca {
    private $titular;
    private $numeroConta;
    private $saldo;
    private $dataAniversario;

    public function __construct() {
        $this->titular = '';
        $this->numeroConta = '';
        $this->saldo = 0.0;
        $this->dataAniversario = null;
    }

    public function __constructWithValues($titular, $numeroConta, $saldo, $dataAniversario) {
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
}


