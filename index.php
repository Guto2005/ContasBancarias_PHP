<?php 

require __DIR__ . "/app/models/ContaEspecial.php";
require __DIR__ . "/app/models/ContaPoupanca.php";

use app\models\{Especial, Poupanca};

$conta = new Especial('João Silva', '12345', 1000.50, 500.00);
$conta->depositar(200.00);
echo "Saldo atual: " . $conta->getSaldo(); 
$conta->sacar(1500.00);
echo "Saldo após saque: " . $conta->getSaldo(); 

$conta1 = new Poupanca(); 
$conta2 = new Poupanca();
$conta2->__constructWithValues('Maria Oliveira', '98765', 1500.75, '2024-08-28'); // Criação com valores

echo "Titular da conta: " . $conta2->getTitular() . "\n";
echo "Número da conta: " . $conta2->getNumeroConta() . "\n";
echo "Saldo: " . $conta2->getSaldo() . "\n";
echo "Data de Aniversário: " . $conta2->getDataAniversario() . "\n";
?>

?>