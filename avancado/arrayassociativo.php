<?php
// Criando um array de carros com informações sobre cada um
$carros = array(
    array(
        'marca' => 'Toyota',
        'modelo' => 'Corolla',
        'ano' => 2022
    ),
    array(
        'marca' => 'Honda',
        'modelo' => 'Civic',
        'ano' => 2021
    ),
    array(
        'marca' => 'Volkswagen',
        'modelo' => 'Golf',
        'ano' => 2023
    )
);

// Obtendo o número total de carros no array usando a função count()
$totalCarros = count($carros);

// Usando o loop for para percorrer o array e exibir as informações de cada carro
for ($i = 0; $i < $totalCarros; $i++) {
    echo "Marca: " . $carros[$i]['marca'] . "\n";
    echo "Modelo: " . $carros[$i]['modelo'] . "\n";
    echo "Ano de Fabricação: " . $carros[$i]['ano'] . "\n";
    echo "\n";
}
