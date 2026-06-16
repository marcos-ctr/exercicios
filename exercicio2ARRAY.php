<?php
echo "=== REGISTRO DE NOTAS ===\n\n";
$quantidade = readline("Quantos alunos? ");
echo "\n";
$nomes = [];
$notas = [];
for ($i = 1; $i <= $quantidade; $i++) {

    $nome = readline("Aluno " . $i . " - Nome: ");
    $nota = readline("Aluno " . $i . " - Nota: ");

    $nomes[] = $nome;
    $notas[] = $nota;
}
echo "\n";
$soma = 0;
$maior = $notas[0];
$menor = $notas[0];
for ($i = 0; $i < count($notas); $i++) {

    $soma += $notas[$i];

    if ($notas[$i] > $maior) {
        $maior = $notas[$i];
    }

    if ($notas[$i] < $menor) {
        $menor = $notas[$i];
    }
}

$media = $soma / count($notas);
echo "=== BOLETIM ===\n";

for ($i = 0; $i < count($nomes); $i++) {

    if ($notas[$i] >= 7) {

        $situacao = "Aprovado";

    } elseif ($notas[$i] >= 5) {

        $situacao = "Recuperação";

    } else {

        $situacao = "Reprovado";
    }

    echo $nomes[$i] . " - Nota: " . $notas[$i] . " - " . $situacao . "\n";
}
echo "\n=== ESTATÍSTICAS ===\n";
echo "Média da turma: " . number_format($media, 2) . "\n";
echo "Maior nota: " . $maior . "\n";
echo "Menor nota: " . $menor . "\n";
switch (true) {

    case ($media >= 8):
        $classificacao = "Turma EXCELENTE!";
        break;

    case ($media >= 6):
        $classificacao = "Turma BOA";
        break;

    case ($media >= 4):
        $classificacao = "Turma REGULAR";
        break;

    default:
        $classificacao = "Turma PRECISA MELHORAR";
}
echo "Classificação: " . $classificacao;
