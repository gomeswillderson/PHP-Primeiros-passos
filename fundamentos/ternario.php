<?php

// Idade da pessoa
$idade = 17;

// Número de pessoas tentando entrar no momento (incluindo a própria pessoa)
$numPessoas = 1;

// Verificação da idade e se a pessoa está acompanhada para entrada no estabelecimento
$mensagem = $idade >= 18 ? "Você tem $idade anos. Pode entrar no estabelecimento." :
            ($idade < 16 ? "Você tem $idade anos. Desculpe, você não pode entrar no estabelecimento." :
            ($numPessoas > 1 ? "Você tem $idade anos. Pode entrar no estabelecimento com um acompanhante." :
            "Você tem $idade anos. Desculpe, você só pode entrar no estabelecimento com um acompanhante."));

echo $mensagem . PHP_EOL;
