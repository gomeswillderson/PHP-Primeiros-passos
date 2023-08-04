<?php

// Array associativo com informações sobre a pessoa
$pessoa = array(
    "nome" => "João",
    "idade" => 30,
    "profissao" => "Engenheiro"
);

// String simples (single-quoted) sem interpolação
$stringSimples = 'Olá, ' . $pessoa["nome"] . '! Você tem ' . $pessoa["idade"] . ' anos e é um(a) ' . $pessoa["profissao"] . '.';
echo "String Simples: " . $stringSimples . "\n";

// String complexa (double-quoted) com interpolação
$stringComplexa = "Olá, {$pessoa["nome"]}! Você tem {$pessoa["idade"]} anos e é um(a) {$pessoa["profissao"]}.";
echo "String Complexa: " . $stringComplexa . "\n";

