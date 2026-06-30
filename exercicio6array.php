<?php
$produtos = ["Café", "Pão", "Leite", "Queijo", "Manteiga", "Presunto", "Suco", "Biscoito"];
$precos   = [14.90,   7.50,  5.80,   22.00,    9.40,       18.75,     8.90,   6.50];
$estoque  = [10,      25,    15,     8,        12,          6,         20,     18];

$carrinhoProdutos = [];
$carrinhoQtd = [];
$carrinhoPrecos = [];
$carrinhoProdutos = [];
$carrinhoQtd = [];
$carrinhoPrecos = [];
do {
    echo "\n==============================\n";
    echo "   CAIXA REGISTRADORA\n";
    echo "==============================\n";
    echo "[1] Ver Catálogo\n";
    echo "[2] Adicionar ao Carrinho\n";
    echo "[3] Ver Carrinho\n";
    echo "[4] Remover do Carrinho\n";
    echo "[5] Finalizar Compra\n";
    echo "[0] Fechar Caixa\n";
    $opcao = readline("Opção: ");
$opcao = readline("Escolha uma opção: ");

switch ($opcao) {
    case "1":
        echo "\n=== CATÁLOGO DE PRODUTOS===\n";
        for ($i = 0; $i < count($produtos); $i++) {
            echo "| ". ($i + 1) . "." . $produtos [$i]
            . "| R$" .
            number_format ($precos[$i], 2)
            . " | Estoque: " . $estoque[$i];
            if ($estoque [$i] == 0) {echo " (esgotado)";
            }
            echo "\n";
        }
        break;
    case "2":
    $produto = readline("Digite o número do produto: ");
    $qtd = readline("Quantidade: ");
    $id = $produto - 1;
    if ($produto < 1 || $produto > count($produtos)) {
        echo "Produto não encontrado!\n";
    } elseif ($estoque[$id] == 0) {
        echo "Produto esgotado!\n";
    } elseif ($qtd > $estoque[$id]) {
        echo "Estoque insuficiente! Disponível: " . $estoque[$id] . "\n";
    } else {
        if (in_array($produtos[$id], $carrinhoProdutos)) {
            for ($i = 0; $i < count($carrinhoProdutos); $i++) {
                if ($carrinhoProdutos[$i] == $produtos[$id]) {
                    $carrinhoQtd[$i] += $qtd;
                    $subtotal = $carrinhoQtd[$i] * $carrinhoPrecos[$i];
                    break;
                }
            }
        } else {
            $carrinhoProdutos[] = $produtos[$id];
            $carrinhoQtd[] = $qtd;
            $carrinhoPrecos[] = $precos[$id];
            $subtotal = $precos[$id] * $qtd;
        }
        $estoque[$id] -= $qtd;
        echo $produtos[$id]
            . " x"
            . $qtd
            . " adicionado! Subtotal: R$ "
            . number_format($subtotal, 2)
            . "\n";
    }
    break;
    case "3":
        if (count($carrinhoQtd) == 0) {
            echo "CARRINHO VAZIO";
        } else {
            echo "\n=== CARRINHO DE COMPRAS ===\n";
            $subtotal = 0;
            for ($i = 0; $i < count($carrinhoProdutos); $i++) {
                $itemTotal = $carrinhoPrecos[$i] * $carrinhoQtd[$i];
                $subtotal += $itemTotal;
                echo ($i + 1) . ". " . $carrinhoProdutos[$i]
                    . " - Qtd: " . $carrinhoQtd[$i]
                    . " - R$ " . number_format($itemTotal, 2) . "\n";
            }
            echo "Total: R$ " . number_format($subtotal, 2) . "\n";
        }
        break;
    default:
        echo "OPÇÃO INVÁLIDA";
        break;
    case "4":
    if (count($carrinhoProdutos) == 0) {
        echo "Carrinho vazio!\n";
    } else {
        echo "\n=== CARRINHO ===\n";
        for ($i = 0; $i < count($carrinhoProdutos); $i++) {
            $subtotal = $carrinhoPrecos[$i] * $carrinhoQtd[$i];
            echo ($i + 1) . ". "
                . $carrinhoProdutos[$i]
                . " x" . $carrinhoQtd[$i]
                . " = R$ "
                . number_format($subtotal, 2)
                . "\n";
        }
        $item = readline("Número do item para remover: ");
        $indice = $item - 1;
        if ($indice < 0 || $indice >= count($carrinhoProdutos)) {
            echo "Item inválido!\n";
        } else {
            $produtoRemovido = $carrinhoProdutos[$indice];
            $qtdRemovida = $carrinhoQtd[$indice];
            for ($i = 0; $i < count($produtos); $i++) {
                if ($produtos[$i] == $produtoRemovido) {
                    $estoque[$i] += $qtdRemovida;
                    break;
                }
            }
            unset($carrinhoProdutos[$indice]);
            unset($carrinhoQtd[$indice]);
            unset($carrinhoPrecos[$indice]);
            $carrinhoProdutos = array_values($carrinhoProdutos);
            $carrinhoQtd = array_values($carrinhoQtd);
            $carrinhoPrecos = array_values($carrinhoPrecos);
            echo $produtoRemovido . " removido do carrinho!\n";
        }
    }
    break;
   case "5":
    if (count($carrinhoProdutos) == 0) {
        echo "Nada para finalizar!\n";
    } else {
        echo "\n═══════════════════════════════\n";
        echo "        CUPOM FISCAL\n";
        echo "═══════════════════════════════\n";
        $total = 0;
        $totalItens = 0;
        for ($i = 0; $i < count($carrinhoProdutos); $i++) {
            $subtotal = $carrinhoPrecos[$i] * $carrinhoQtd[$i];
            $total += $subtotal;
            $totalItens += $carrinhoQtd[$i];
            echo $carrinhoProdutos[$i]
                . " x" . $carrinhoQtd[$i]
                . " R$ "
                . number_format($subtotal, 2)
                . "\n";
        }
        echo "───────────────────────────────\n";
        echo "Itens: " . $totalItens . "\n";
        echo "TOTAL: R$ " . number_format($total, 2) . "\n";
        if ($total >= 100) {
            $desconto = 10;
        } elseif ($total >= 50) {
            $desconto = 5;
        } else {
            $desconto = 0;
        }
        if ($desconto > 0) {
            $valorDesconto = $total * ($desconto / 100);
            $novoTotal = $total - $valorDesconto;
            echo "Desconto de "
                . $desconto
                . "%: -R$ "
                . number_format($valorDesconto, 2)
                . "\n";
            echo "TOTAL COM DESCONTO: R$ "
                . number_format($novoTotal, 2)
                . "\n";
        }
        $carrinhoProdutos = [];
        $carrinhoQtd = [];
        $carrinhoPrecos = [];
        echo "Compra finalizada com sucesso!\n";
    }
    break;
    case "0":
    echo "Caixa fechado. Até logo!\n";
    break;
}
} while ($opcao != "0");