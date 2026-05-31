<?php

$nome = readline("Digite seu nome: ");

echo "Escolha o período do dia:";
echo "[1] Manhã";
echo "[2] Tarde";
echo "[3] Noite";

$opcao = readline("Opção: ");

switch ($opcao) {
    case "1":
        $saudacao = "Bom dia";
        break;

    case "2":
        $saudacao = "Boa tarde";
        break;

    case "3":
        $saudacao = "Boa noite";
        break;

    default:
        $saudacao = "Opção inválida!";
}

if ($opcao == "1" || $opcao == "2" || $opcao == "3") {

    echo $saudacao . ", " . $nome . "! Tenha um ótimo período!";

    $horas = readline("Quantas horas pretende trabalhar/estudar? ");

    $minutos = $horas * 60;

    echo "Você vai dedicar " . $horas . " horas (" . $minutos . " minutos) neste período.\n";

} else {

    echo "Opção inválida! Digite 1, 2 ou 3.";}
    