<?php

require_once 'src/Titular.php';

class Conta
{
    private static $numeroContas = 0;
    private Titular $titular;
    private float $saldo = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        // Incrementa o contador de contas bancárias ao criar uma nova conta
        self::$numeroContas++;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            echo "Valor inválido";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferencia(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function extrato(): string
    {
        return "Seu saldo é de $this->saldo" . PHP_EOL;
    }

    public function consultaConta(): string
    {
        return "Titular: {$this->titular->getNome()}, CPF: {$this->titular->getCPF()}, Saldo: $this->saldo" . PHP_EOL;
    }

    public static function getNumeroContas(): int
    {
        return self::$numeroContas;
    }
}

// Exemplo de uso:

// Criar o titular da conta
$titular1 = new Titular('123.456.789-01', 'Fulano');

// Criar a conta bancária
$conta1 = new Conta($titular1);

// Obter o número total de contas bancárias criadas até o momento
$numeroTotalContas = Conta::getNumeroContas();

echo "Número total de contas bancárias: " . $numeroTotalContas;
