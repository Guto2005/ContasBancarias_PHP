<?php 

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

use app\models\ContaEspecial;
use app\models\ContaPoupanca;

$contaEspecial = new ContaEspecial('João Silva', '12345', 1000.50, 500.00);
$contaEspecial->depositar(200.00);
$resultadoSaqueEspecial = $contaEspecial->sacar(1500.00);

echo $contaEspecial->exibirDadosConta();
if ($resultadoSaqueEspecial !== true) {
    echo $resultadoSaqueEspecial . "\n";
}
echo "Saldo após tentativa de saque (João Silva): R$ " . number_format($contaEspecial->getSaldo(), 2, ',', '.') . "\n";
echo "\n";

$contaPoupanca = new ContaPoupanca('Maria Oliveira', '98765', 1500.75, '2024-08-28');
$resultadoSaquePoupanca = $contaPoupanca->sacar(1600.00);

echo $contaPoupanca->exibirDadosConta();
if ($resultadoSaquePoupanca !== true) {
    echo $resultadoSaquePoupanca . "\n";
}

?>






