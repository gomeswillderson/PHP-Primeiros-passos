<?php
// Função para adicionar cor ao texto no terminal
function colorize($text, $colorCode) {
    return "\033[{$colorCode}m{$text}\033[0m";
}

// Exemplo de array indexado
$frutas = array("Maçã", "Banana", "Laranja");

// Acesso aos elementos usando índices
echo colorize("Exemplo de array indexado:\n", 33); // Cor amarela
echo $frutas[0] . "\n"; // Saída: Maçã
echo $frutas[1] . "\n"; // Saída: Banana
echo $frutas[2] . "\n"; // Saída: Laranja

echo "\n"; // Quebra de linha para melhor visualização

// Exemplo de array associativo
$aluno = array(
    "nome" => "João",
    "idade" => 20,
    "curso" => "Engenharia"
);

// Acesso aos elementos usando chaves
echo colorize("Exemplo de array associativo:\n", 34); // Cor azul
echo $aluno["nome"] . "\n";  // Saída: João
echo $aluno["idade"] . "\n"; // Saída: 20
echo $aluno["curso"] . "\n"; // Saída: Engenharia

echo "\n"; // Quebra de linha para melhor visualização

// Exemplo de array multidimensional
$times = array(
    "time1" => array("nome" => "Real Madrid", "pais" => "Espanha"),
    "time2" => array("nome" => "Manchester United", "pais" => "Inglaterra"),
    "time3" => array("nome" => "Bayern de Munique", "pais" => "Alemanha")
);

// Acesso aos elementos do array multidimensional
echo colorize("Exemplo de array multidimensional:\n", 35); // Cor roxa
echo $times["time1"]["nome"] . "\n"; // Saída: Real Madrid
echo $times["time2"]["pais"] . "\n"; // Saída: Inglaterra
echo $times["time3"]["nome"] . "\n"; // Saída: Bayern de Munique
