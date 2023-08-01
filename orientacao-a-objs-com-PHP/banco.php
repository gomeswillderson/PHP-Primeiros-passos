<?php

require_once 'src/Conta.php';

$titularContaTeste = new Titular("987.654.321-00", "Joao");
$contaTeste = new Conta($titularContaTeste);

$contaTeste->depositar(100);
echo $contaTeste->consultaConta();

$titularContaDestino = new Titular("123.456.789-01", "Maria");
$contaDestino = new Conta($titularContaDestino);

$contaTeste->transferencia(50, $contaDestino);
echo $contaTeste->consultaConta();
echo $contaDestino->consultaConta();
