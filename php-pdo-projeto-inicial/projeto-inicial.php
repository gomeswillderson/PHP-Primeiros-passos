<?php

use Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Joao',
    new \DateTimeImmutable('1991-02-25')
);

echo $student->age() .PHP_EOL;
