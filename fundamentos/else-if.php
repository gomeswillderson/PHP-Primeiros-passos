<?php
// Constante que define a idade mínima permitida para entrada
const IDADE_MINIMA = 18;

// Variável com a idade do visitante (coloquei 18 apenas para fins de exemplo)
$idade = 18;

// Mensagem inicial explicando a restrição de idade
echo "Você só pode entrar se tiver mais do que " . IDADE_MINIMA . " anos" . PHP_EOL;

// Verificação se a idade é maior ou igual à idade mínima
if ($idade >= IDADE_MINIMA) {
    // Mensagem de entrada permitida
    echo "Você tem $idade anos. Idade permitida para entrada." . PHP_EOL;
    echo "Pode entrar." . PHP_EOL;
} else {
    // Mensagem de entrada negada
    echo "Você tem $idade anos. Desculpe, você não pode entrar." . PHP_EOL;
}
