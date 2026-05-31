<?php

echo "=== CONVERSOR DE UNIDADES ===\n";

echo "[1] Quilômetros -> Milhas\n";
echo "[2] Celsius -> Fahrenheit\n";
echo "[3] Quilos -> Libras\n";
echo "[4] Metros -> Pés \n";


$opcao = readline("Escolha uma opção (1-4): ");


$valor = readline("Digite o valor para converter: ");

echo "\n";


if (!is_numeric($valor) || $valor < 0) {

    echo "Erro: Digite um numero valido";

} else {

    switch ($opcao) {

        case "1":

            $resultado = $valor * 0.621371;
            echo $valor . " km equivale a " . $resultado . " milhas";

            break;

        case "2":

            $resultado = ($valor * 9/5) + 32;
            echo $valor . " °C equivale a " . $resultado . " °F";

            break;

        case "3":

            $resultado = $valor * 2.20462;
            echo $valor . " kg equivale a " . $resultado . " libras";

            break;

        case "4":

            $resultado = $valor * 3.28084;
            echo $valor . " metros equivale a " . $resultado . " pés";

            break;

        default:

            echo "Opção inválida! Escolha entre 1 e 4.";
    }
}

