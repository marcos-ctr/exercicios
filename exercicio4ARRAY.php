<?php
$produtos   = ["caneta", "caderno", "borracha", "lápis", "mochila"];
$precos     = [2.50, 15.00, 1.50, 1.00, 89.90];
$quantidades = [100, 50, 200, 150, 20];
do {

    echo "\n[1] Listar\n";
    echo "[2] Vender\n";
    echo "[3] Repor\n";
    echo "[4] Relatório\n";
    echo "[0] Sair\n";

    $opcao = readline("Opção: ");

    switch ($opcao) {

        case "1":
           
           if ($quantidadeVendida <= $quantidades[$id])
           $quantidades[$id] -= $quantidadeVendida
 
            break;

        case "2":
            if ($)
            
            //vender
            break;

        case "3":
           
           
            //estoque tbm
            break;

        case "4":
            
            
            //re
            break;

        case "0":
            echo "estoque final pronto\n";
            break;

        default:
            echo "opção invalida\n";
    }

} while ($opcao != "0");
