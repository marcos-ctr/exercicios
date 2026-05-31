<?php

echo "=== SIMULADOR DE PARCELAS ===\n\n";

$produto = readline("Nome do produto: ");
$valor = readline("Valor total (R$): ");
$parcelas = readline("Número de parcelas (1-12): ");

echo "\n";

if ($valor <= 0) {

    echo "Erro: Valor inválido!";

} elseif ($parcelas < 1 || $parcelas > 12) {

    echo "Erro: Parcelas entre 1 e 12!";

} else {

    
    switch (true) {

        case ($parcelas >= 1 && $parcelas <= 3):
            $juros = 0;
            break;

        case ($parcelas >= 4 && $parcelas <= 6):
            $juros = 5;
            break;

        case ($parcelas >= 7 && $parcelas <= 9):
            $juros = 10;
            break;

        case ($parcelas >= 10 && $parcelas <= 12):
            $juros = 15;
            break;
    }

    
    $valorFinal = $valor + ($valor * $juros / 100);
    $valorParcela = $valorFinal / $parcelas;

    echo "Juros aplicados: " . $juros . "%\n";
    echo "Valor final: R$ " . number_format($valorFinal, 2) . "\n\n";

    echo "--- PARCELAS ---\n";

    
    for ($i = 1; $i <= $parcelas; $i++) {

        echo "Parcela " . $i . "/" . $parcelas . ": R$ " . number_format($valorParcela, 2) . "\n";
    }

    echo "----------------\n\n";

    
    echo "Produto: " . $produto . "\n";
    echo "Valor original: R$ " . number_format($valor, 2) . "\n";
    echo "Juros: " . $juros . "%\n";
    echo "Valor final: R$ " . number_format($valorFinal, 2);
}
