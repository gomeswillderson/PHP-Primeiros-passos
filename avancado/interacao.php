<?php
// Array inicial com algumas cores
$cores = array('Vermelho', 'Azul', 'Verde');

// Exibindo o array antes de adicionar mais cores
echo "Array inicial de cores: ";
print_r($cores);

// Adicionando mais cores ao array
$cores[] = 'Amarelo'; // Será adicionado no índice 3
$cores[] = 'Roxo'; // Será adicionado no índice 4

// Exibindo o array após adicionar mais cores
echo "Array com as cores adicionadas: ";
print_r($cores);
