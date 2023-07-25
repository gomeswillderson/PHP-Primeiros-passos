<?php
// Exemplo de um array associativo com informações de contas correntes
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'João da Silva',
        'saldo' => 1500.50
    ],
    '987.654.321-00' => [
        'titular' => 'Maria Santos',
        'saldo' => 3000.75
    ],
    '111.222.333-44' => [
        'titular' => 'Pedro Oliveira',
        'saldo' => 500.25
    ]
];

// Iterando sobre o array de contas correntes
foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF do titular: " . $cpf . "\n";
    echo "Titular: " . $conta['titular'] . "\n";
    echo "Saldo: " . $conta['saldo'] . "\n";
    echo "\n";
}
