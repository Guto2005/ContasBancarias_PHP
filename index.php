<?php 

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

// Uso dos namespaces corretos
use app\models\ContaEspecial;
use app\models\ContaPoupanca;

// Testando a classe ContaEspecial
$contaEspecial = new ContaEspecial('João Silva', '12345', 1000.50, 500.00);
$contaEspecial->depositar(200.00);
echo nl2br($contaEspecial->exibirDadosConta()); // Exibindo dados da conta especial

// Tentando sacar mais do que o disponível para ver a mensagem de erro
$resultadoSaque = $contaEspecial->sacar(1500.00);
if ($resultadoSaque !== true) {
    echo $resultadoSaque . "<br>";
}
echo "Saldo após tentativa de saque (João Silva): R$ " . number_format($contaEspecial->getSaldo(), 2, ',', '.') . "<br><br>";

// Testando a classe ContaPoupanca
$contaPoupanca = new ContaPoupanca('Maria Oliveira', '98765', 1500.75, '2024-08-28'); 
echo nl2br($contaPoupanca->exibirDadosConta()); // Exibindo dados da conta poupança
?>
