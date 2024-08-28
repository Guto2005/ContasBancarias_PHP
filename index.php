<?php 

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

// Uso dos namespaces corretos
use app\models\ContaEspecial;
use app\models\ContaPoupanca;

// Testando a classe ContaEspecial
$conta = new ContaEspecial('João Silva', '12345', 1000.50, 500.00);
echo "Saldo inicial (João Silva): R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

$resultadoDeposito = $conta->depositar(200.00);
echo $resultadoDeposito . "<br>";
echo "Saldo após depósito (João Silva): R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

// Tentando sacar mais do que o disponível para ver a mensagem de erro
$resultadoSaque = $conta->sacar(1500.00);
if ($resultadoSaque !== true) {
    echo $resultadoSaque . "<br>";
}
echo "Saldo após tentativa de saque (João Silva): R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br><br>";

// Testando a classe ContaPoupanca
$conta1 = new ContaPoupanca('Maria Oliveira', '98765', 1500.75, '2024-08-28'); 

echo "Dados da Conta Poupança:<br>";
echo "Titular da conta: " . $conta1->getTitular() . "<br>";
echo "Número da conta: " . $conta1->getNumeroConta() . "<br>";
echo "Saldo: R$ " . number_format($conta1->getSaldo(), 2, ',', '.') . "<br>";
echo "Data de Aniversário: " . $conta1->getDataAniversario() . "<br>";
?>


