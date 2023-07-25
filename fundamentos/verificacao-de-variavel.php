<?php

// Declaração da variável idade
$idade = 16;

// Exibindo uma mensagem simples
echo "Olá mundo!" . PHP_EOL;

// Exibindo a idade entre aspas
echo "Eu tenho \"$idade\" anos" . PHP_EOL;

// Quebra de linha
echo PHP_EOL . PHP_EOL;

// Verificando se a pessoa pode entrar em um lugar com restrição de idade
$idadeMinima = 18;

if ($idade >= $idadeMinima) {
    echo "Você tem $idade anos. Pode entrar." . PHP_EOL;
} else {
    $anosFaltantes = $idadeMinima - $idade;
    echo "Você só pode entrar, se tiver mais de 18 anos." . PHP_EOL;
    echo "Faltam $anosFaltantes anos para você poder entrar." . PHP_EOL;
}
