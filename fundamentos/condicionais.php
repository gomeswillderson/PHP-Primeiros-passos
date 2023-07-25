<?php

// Idade da pessoa
$idade = 17;

// Número de pessoas tentando entrar no momento (incluindo a própria pessoa)
$numPessoas = 1;

// Verificação da idade e se a pessoa está acompanhada para entrada no estabelecimento
if ($idade >= 18) {
    // Caso a idade seja maior ou igual a 18, a pessoa pode entrar.
    echo "Você tem $idade anos. Pode entrar no estabelecimento.";
} else if ($idade < 16) {
    // Caso a idade seja menor que 16, a pessoa não pode entrar.
    echo "Você tem $idade anos. Desculpe, você não pode entrar no estabelecimento.";
} else {
    // Caso a idade esteja entre 16 e 18 (inclusive), verificar se a pessoa está acompanhada.
    if ($numPessoas > 1) {
        echo "Você tem $idade anos. Pode entrar no estabelecimento com um acompanhante.";
    } else {
        echo "Você tem $idade anos. Desculpe, você só pode entrar no estabelecimento com um acompanhante." . PHP_EOL;
    }
}
