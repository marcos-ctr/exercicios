<?php

echo "=== CONTROLE DE GASTOS SEMANAL ===\n\n";

$total = 0;
for ($i = 1; $i <= 7; $i++) {
    switch ($i) {

        case 1:
            $dia = "Segunda";
            break;

        case 2:
            $dia = "Terça";
            break;

        case 3:
            $dia = "Quarta";
            break;

        case 4:
            $dia = "Quinta";
            break;

        case 5:
            $dia = "Sexta";
            break;

        case 6:
            $dia = "Sábado";
            break;

        case 7:
            $dia = "Domingo";
            break;
    }
    $gasto = readline("Quanto gastou na " . $dia . "? R$ ");
    if ($gasto == 0) {

        echo "Parabéns! Você não gastou nada!\n";

    } elseif ($gasto >= 1 && $gasto <= 50) {

        echo "Gasto baixo.\n";

    } elseif ($gasto >= 51 && $gasto <= 150) {

        echo "Gasto moderado.\n";

    } else {

        echo "Gasto alto! Cuidado!\n";
    }

    // tudo
    $total += $gasto;
}

echo "\n=== RESUMO DA SEMANA ===\n";

$media = $total / 7;

echo "Total gasto: R$ " . number_format($total, 2) . "\n";
echo "Média diária: R$ " . number_format($media, 2) . "\n";

if ($total <= 200) {

    echo "Semana econômica! Ótimo controle!";

} elseif ($total >= 201 && $total <= 500) {

    echo "Semana normal. Pode melhorar!";

} else {

    echo "Semana cara! Hora de economizar!";
}
