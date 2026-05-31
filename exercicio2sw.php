<?php

echo "=== CALCULADORA ===\n";

// Pedindo os números
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");

echo "\nEscolha a operação:\n";
echo "[1] Soma (+)\n";
echo "[2] Subtração (-)\n";
echo "[3] Multiplicação (*)\n";
echo "[4] Divisão (/)\n";


$opcao = readline("Opção: ");

echo "\n";


switch ($opcao) {

    case "1":
        $resultado = $num1 + $num2;
        echo $num1 . " + " . $num2 . " = " . $resultado;
        break;

    case "2":
        $resultado = $num1 - $num2;
        echo $num1 . " - " . $num2 . " = " . $resultado;
        break;

    case "3":
        $resultado = $num1 * $num2;
        echo $num1 . " * " . $num2 . " = " . $resultado;
        break;

    case "4":

        
        if ($num2 == 0) {
            echo "Erro: Não é possível dividir por zero!";
        } else {
            $resultado = $num1 / $num2;
            echo $num1 . " / " . $num2 . " = " . $resultado;
        }

        break;

    default:
        echo "Operação inválida!";
}

