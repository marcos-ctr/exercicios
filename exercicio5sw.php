<?php

$nome = readline ("Digite seu nome");
$serviço = readline ("Digite o nome do serviço");
$horas = readline ("Digite a quantidade de horas do serviço");
$VH = readline ("digite o valor por hora");
echo "Qual o seu tipo de cliente";
echo "[1] Cliente novo (sem desconto)";
echo "[2] Cliente recorrente (10% de desconto)";
echo "[3] Cliente VIP (20% de desconto)";

$opcao = readline ("Opção: ");
$desconto = 0;

switch ($opcao) {
case "1":
    $desconto = 0;
    break;

    case "2":
        $desconto = 10;
        break;

case "3":
    $desconto = 20;
    break;
    
default: "tipo de cliente inválido";

}
if ($horas <= 0) {
    echo "Hora deve ser maior que 0";
}
if ($VH <= 0) {
    echo "Valor por hora deve ser maior que 0";
    if ($VH <=0)
        echo "INVÁLIDO";
if ($horas <=0)
    echo "INVÁLIDO";

}
$subtotal = $horas * $VH;
$desconto = $subtotal * ($desconto / 100);
$total = $subtotal - $desconto;

echo "==== GERADOR DE ORÇAMENTO =====\n";
echo "Nome de cliente: $nome\n";
echo "Serviço: $serviço\n";
echo "Quantidade de horas: $horas\n";
echo "Valor por hora: $VH\n";
echo "Tipo de cliente: $opcao\n";
echo "===== ORÇAMENTO =====\n";
echo "Cliente: $nome\n";
echo "Serviço: $serviço\n";
echo "Horas: $horas\n";
echo "Valor por hora: $VH\n";
echo "Subtotal: $subtotal\n";
echo "Desconto: $desconto\n";
echo "Total: $total\n";


