<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO( dsn: 'sqlite:' . $caminhoBanco);

echo 'Conectado' . PHP_EOL;

$pdo->exec( statement:'CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');