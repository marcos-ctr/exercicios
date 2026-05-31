<?php

echo "=== FICHA DE TREINO ===\n\n";

$aluno = readline("Nome do aluno: ");

echo "\nEscolha o treino:\n";
echo "[1] Treino A - Peito (4 séries)\n";
echo "[2] Treino B - Costas (3 séries)\n";
echo "[3] Treino C - Pernas (5 séries)\n";

$opcao = readline("Opção: ");

switch ($opcao) {
    case "1":
        $nomeTreino = "A - Peito";
        $series = 4;
        $ex1 = "Supino Reto";
        $ex2 = "Crucifixo";
        $ex3 = "Flexao";
        break;

    case "2":
        $nomeTreino = "B - Costas";
        $series = 3;
        $ex1 = "Puxada Frontal";
        $ex2 = "Remada Curvada";
        $ex3 = "Pulldown";
        break;

    case "3":
        $nomeTreino = "C - Pernas";
        $series = 5;
        $ex1 = "Agachamento";
        $ex2 = "Leg Press";
        $ex3 = "Cadeira Extensora";
        break;

    default:
        echo "Treino invalido!\n";
        exit;
}

echo "\n";

$peso = readline("Peso utilizado (kg): ");

if ($peso <= 20) {
    echo "Carga leve - foco em tecnica\n";
} elseif ($peso <= 50) {
    echo "Carga moderada - bom trabalho\n";
} else {
    echo "Carga pesada - cuidado com a postura!\n";
}

echo "\n--- TREINO " . $nomeTreino . " ---\n\n";

/* Exercício 1 */
for ($i = 1; $i <= $series; $i++) {
    echo $ex1 . " - Serie " . $i . "/" . $series . " - " . $peso . "kg\n";
}

echo "\n";

/* Exercício 2 */
for ($i = 1; $i <= $series; $i++) {
    echo $ex2 . " - Serie " . $i . "/" . $series . " - " . $peso . "kg\n";
}

echo "\n";

/* Exercício 3 */
for ($i = 1; $i <= $series; $i++) {
    echo $ex3 . " - Serie " . $i . "/" . $series . " - " . $peso . "kg\n";
}

echo "\n";

$volume = 3 * $series * $peso * 12;

echo "--- RESUMO ---\n";
echo "Aluno: " . $aluno . "\n";
echo "Treino: " . $nomeTreino . "\n";
echo "Volume total: " . $volume . "kg (3 exercicios x " . $series . " series x " . $peso . "kg x 12 reps)\n";

?>