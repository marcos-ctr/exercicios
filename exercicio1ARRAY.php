<?php
echo "=== LISTA DE COMPRAS ===\n\n";
$listaCompras = [];
while (true) {

    $item = readline('Digite um item (ou "sair"): ');

    if ($item == "sair") {
        break;
    }

    if (in_array($item, $listaCompras)) {

        echo "Item já está na lista!\n";

    } else {

        $listaCompras[] = $item;

        echo "Item adicionado!\n";
    }
}
echo "\nO que deseja fazer?\n";
echo "[1] Ver lista\n";
echo "[2] Buscar\n";
echo "[3] Remover\n";
echo "[4] Contar\n";

$opcao = readline("Opção: ");
echo "\n";
switch ($opcao) {

    case "1":

        echo "=== SUA LISTA ===\n";

        for ($i = 0; $i < count($listaCompras); $i++) {

            echo ($i + 1) . ". " . $listaCompras[$i] . "\n";
        }

        break;

    case "2":

        $buscar = readline("Digite o item para buscar: ");

        if (in_array($buscar, $listaCompras)) {

            echo "Item encontrado!\n";

        } else {

            echo "Item não encontrado!\n";
        }

        break;

    case "3":

        echo "=== SUA LISTA ===\n";

        for ($i = 0; $i < count($listaCompras); $i++) {

            echo ($i + 1) . ". " . $listaCompras[$i] . "\n";
        }

        $indice = readline("Digite o índice para remover: ");

        if ($indice >= 1 == $indice <= count($listaCompras)) {

            unset($listaCompras[$indice - 1]);

            $listaCompras = array_values($listaCompras);

            echo "Item removido!\n";

        } else {

            echo "Índice inválido!\n";
        }

        break;

    case "4":

        echo "Você tem " . count($listaCompras) . " itens na lista.\n";

        break;

    default:

        echo "Opção inválida!\n";
}
echo "\n=== LISTA FINAL ===\n";
for ($i = 0; $i < count($listaCompras); $i++) {

    echo ($i + 1) . ". " . $listaCompras[$i] . "\n";
}
echo "Total de itens: " . count($listaCompras);