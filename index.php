<?php 

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

// Uso dos namespaces corretos
use app\models\ContaEspecial;
use app\models\ContaPoupanca;

// Testando a classe ContaEspecial
$contaEspecial = new ContaEspecial('João Silva', '12345', 1000.50, 500.00);
$contaEspecial->depositar(200.00); // Deposita 200
$resultadoSaqueEspecial = $contaEspecial->sacar(1000.00); // Tenta sacar 1500

// Exibindo dados da conta especial
echo $contaEspecial->exibirDadosConta();
if ($resultadoSaqueEspecial !== true) {
    echo "Erro: " . $resultadoSaqueEspecial . "\n";
}
echo "Saldo após tentativa de saque (João Silva): R$ " . number_format($contaEspecial->getSaldo(), 2, ',', '.') . "\n";
echo "\n";

// Testando a classe ContaPoupanca
$contaPoupanca = new ContaPoupanca('Maria Oliveira', '98765', 1500.75, '2024-08-28');
$contaPoupanca->depositar(500.00); // Deposita 500
$resultadoSaquePoupanca = $contaPoupanca->sacar(1600.00); // Tenta sacar 1600

// Exibindo dados da conta poupança
echo $contaPoupanca->exibirDadosConta();
if ($resultadoSaquePoupanca !== true) {
    echo "Erro: " . $resultadoSaquePoupanca . "\n";
}

?>









