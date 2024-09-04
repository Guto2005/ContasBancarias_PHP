<?php

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

use app\models\ContaEspecial;
use app\models\ContaPoupanca;

$contaEspecial1 = new ContaEspecial('João Silva', '12345', 1000.50, 500.00);
$contaEspecial2 = new ContaEspecial('Ana Souza', '67890', 500.00, 300.00);
$contaEspecial1->depositar(200.00);
$resultadoTransferenciaEspecial = $contaEspecial1->transferir(1000.00, $contaEspecial2);

echo "<html><body>";

echo "<h2>=== Informações da Conta Especial João Silva ===</h2>";
echo "<pre>" . $contaEspecial1->exibirDadosConta() . "</pre>";
if ($resultadoTransferenciaEspecial !== true) {
    echo "<p>Erro: " . htmlspecialchars($resultadoTransferenciaEspecial) . "</p>";
}
echo "<p>Saldo após tentativa de transferência para Ana Souza: R$ " . number_format($contaEspecial1->getSaldo(), 2, ',', '.') . "</p>";

echo "<br>";

echo "<h2>=== Informações da Conta Especial Ana Souza ===</h2>";
echo "<pre>" . $contaEspecial2->exibirDadosConta() . "</pre>";

echo "<br>";

$contaPoupanca1 = new ContaPoupanca('Maria Oliveira', '98765', 1500.75, '2024-08-28');
$contaPoupanca2 = new ContaPoupanca('Pedro Almeida', '54321', 200.00, '2025-05-15');
$contaPoupanca1->depositar(500.00);
$resultadoTransferenciaPoupanca = $contaPoupanca1->transferir(1000.00, $contaPoupanca2);

echo "<h2>=== Informações da Conta Poupança Maria Oliveira ===</h2>";
echo "<pre>" . $contaPoupanca1->exibirDadosConta() . "</pre>";
if ($resultadoTransferenciaPoupanca !== true) {
    echo "<p>Erro: " . htmlspecialchars($resultadoTransferenciaPoupanca) . "</p>";
}
echo "<p>Saldo após tentativa de transferência para Pedro Almeida: R$ " . number_format($contaPoupanca1->getSaldo(), 2, ',', '.') . "</p>";

echo "<br>";

echo "<h2>=== Informações da Conta Poupança Pedro Almeida ===</h2>";
echo "<pre>" . $contaPoupanca2->exibirDadosConta() . "</pre>";

echo "</body></html>";
?>














