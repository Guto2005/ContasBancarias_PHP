<?php 

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

// Uso dos namespaces corretos
use app\models\ContaEspecial;
use app\models\ContaPoupanca;

// Testando a classe ContaEspecial
$contaEspecial = new ContaEspecial('João Silva', '12345', 1000.50, 500.00);
$contaEspecial->depositar(200.00);
$resultadoSaque = $contaEspecial->sacar(1500.00);

// Exibindo dados da conta especial
echo "=== Informações da Conta Especial ===\n";
echo "Titular: " . $contaEspecial->getTitular() . "\n";
echo "Número da Conta: " . $contaEspecial->getNumeroDaConta() . "\n";
echo "Saldo: R$ " . number_format($contaEspecial->getSaldo(), 2, ',', '.') . "\n";
echo "Limite: R$ " . number_format($contaEspecial->getLimite(), 2, ',', '.') . "\n";
echo "Saldo após tentativa de saque (João Silva): R$ " . number_format($contaEspecial->getSaldo(), 2, ',', '.') . "\n";
echo "\n";

// Testando a classe ContaPoupanca
$contaPoupanca = new ContaPoupanca('Maria Oliveira', '98765', 1500.75, '2024-08-28'); 

// Exibindo dados da conta poupança
echo "=== Informações da Conta Poupança ===\n";
echo "Titular: " . $contaPoupanca->getTitular() . "\n";
echo "Número da Conta: " . $contaPoupanca->getNumeroConta() . "\n";
echo "Saldo: R$ " . number_format($contaPoupanca->getSaldo(), 2, ',', '.') . "\n";
echo "Data de Aniversário: " . $contaPoupanca->getDataAniversario() . "\n";

?>

