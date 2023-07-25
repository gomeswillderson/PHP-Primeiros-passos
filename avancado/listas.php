<?php
// Criando um array de frutas com informações sobre cada uma
$frutas = array(
    array(
        'nome' => 'Maçã',
        'cor' => 'Vermelha',
        'sabor' => 'Doce'
    ),
    array(
        'nome' => 'Banana',
        'cor' => 'Amarela',
        'sabor' => 'Doce'
    ),
    array(
        'nome' => 'Laranja',
        'cor' => 'Laranja',
        'sabor' => 'Cítrico'
    )
);

// Percorrendo o array e exibindo as informações de cada fruta
foreach ($frutas as $fruta) {
    echo "Nome: " . $fruta['nome'] . "\n";
    echo "Cor: " . $fruta['cor'] . "\n";
    echo "Sabor: " . $fruta['sabor'] . "\n";
    echo "\n";
}
