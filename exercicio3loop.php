<?php

echo "=== CONECTAR AO WI-FI ===\n\n";

$senhaCorreta = "php123";
$maxTentativas = 5;
$acertou = false;
$tentativasUsadas = 0;

for ($i = 1; $i <= $maxTentativas; $i++) {

    echo "Tentativa " . $i . "/" . $maxTentativas . "\n";

    $senha = readline("Digite a senha do Wi-Fi: ");

    $tentativasUsadas = $i;

    if ($senha == $senhaCorreta) {
        echo "Senha correta! Conectado ao Wi-Fi!\n";
        $acertou = true;
        break;
    } else {
        echo "Senha incorreta!\n";

        if ($i == 1 || $i == 2) {
            echo "Dica: A senha tem 6 caracteres.\n";
        } elseif ($i == 3 || $i == 4) {
            echo "Dica: A senha começa com 'php'.\n";
        } else {
            echo "Última chance!\n";
        }
    }

    echo "\n";
}

if (!$acertou) {
    echo "\nBloqueado! Você errou 5 vezes. Peça a senha para o dono.\n";
}

echo "\nTentativas utilizadas: " . $tentativasUsadas . "/" . $maxTentativas . "\n";
