<?php
$opcoes = ["PHP", "JavaScript", "Python", "Java"];
$votos = [0, 0, 0, 0];
$eleitores = readline("Quantos eleitores?");
echo "\n";
for ($i = 0; $i < count($opcoes); $i++) {

    echo "[" . ($i + 1) . "] " . $opcoes[$i] . "\n";
}
for ($eleitor = 1; $eleitor <= $eleitores; $eleitor++) {

    echo "--- eleitor " . $eleitores . " ---\n";

    $voto = readline("Seu voto: ");


    if ($voto >= 1 && $voto <= 4) {

        $indice = $voto - 1;

        $votos[$indice]++;

        echo "Voto computado!\n\n";

    } else {

        echo "Voto inválido!\n\n";

        $eleitor--;
    }
}
$totalVotos = array_sum($votos);

echo "=== RESULTADO ===\n";
for ($i = 0; $i < count($opcoes); $i++) {

    $barra = str_repeat("█", $votos[$i]);

    if ($totalVotos > 0) {
        $percentual = ($votos[$i] / $totalVotos) * 100;
    } else {
        $percentual = 0;
    }

    echo $opcoes[$i] . ": "
        . $votos[$i] . " voto(s) | "
        . $barra . " "
        . number_format($percentual, 1) . "%\n";
}
$maior = $votos[0];