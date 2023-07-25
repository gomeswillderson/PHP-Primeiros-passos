<?php

// Exemplo da função break
for ($i = 1; $i <= 5; $i++) {
    echo "Contagem: $i" . PHP_EOL;
    if ($i === 3) {
        echo "Interrompendo o loop com break." . PHP_EOL;
        break;
    }
}

echo PHP_EOL; // Quebra de linha para separar os exemplos

// Exemplo da função continue
for ($j = 1; $j <= 5; $j++) {
    if ($j === 3) {
        echo "Pulando a iteração $j com continue." . PHP_EOL;
        continue;
    }
    echo "Contagem: $j" . PHP_EOL;
}
