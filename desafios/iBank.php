<?php

class ContaBancaria {
    private $contas = array();

    // Construtor para criar contas bancárias registradas
    public function __construct() {
        // Conta 1
        $conta1 = array(
            "nome" => "Thaylor Inacio",
            "saldo" => 1500
        );

        // Conta 2
        $conta2 = array(
            "nome" => "Maria Souza",
            "saldo" => 2000
        );

        // Conta 3
        $conta3 = array(
            "nome" => "Pedro Almeida",
            "saldo" => 3000
        );

        $this->contas = array("123" => $conta1, "456" => $conta2, "789" => $conta3);
    }

    // Função para exibir informações da conta
    public function exibirConta($numConta) {
        if (isset($this->contas[$numConta])) {
            echo "Titular: " . $this->contas[$numConta]["nome"] . "\n";
            echo "Saldo: R$" . number_format($this->contas[$numConta]["saldo"], 2, ',', '.') . "\n";
        } else {
            echo "Conta não encontrada.\n";
        }
    }

    // Função para realizar saque
    public function sacar($numConta, $valor) {
        if (isset($this->contas[$numConta])) {
            if ($valor > 0 && $valor <= $this->contas[$numConta]["saldo"]) {
                $this->contas[$numConta]["saldo"] -= $valor;
                echo "Saque de R$" . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n";
            } else {
                echo "Saldo insuficiente para saque ou valor inválido.\n";
            }
        } else {
            echo "Conta não encontrada.\n";
        }
    }

    // Função para realizar pagamento
    public function pagar($numConta, $valor) {
        if (isset($this->contas[$numConta])) {
            if ($valor > 0 && $valor <= $this->contas[$numConta]["saldo"]) {
                $this->contas[$numConta]["saldo"] -= $valor;
                echo "Pagamento de R$" . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n";
            } else {
                echo "Saldo insuficiente para pagamento ou valor inválido.\n";
            }
        } else {
            echo "Conta não encontrada.\n";
        }
    }

    // Função para realizar transferência
    public function transferir($numContaOrigem, $numContaDestino, $valor) {
        if (isset($this->contas[$numContaOrigem]) && isset($this->contas[$numContaDestino])) {
            if ($valor > 0 && $valor <= $this->contas[$numContaOrigem]["saldo"]) {
                $this->contas[$numContaOrigem]["saldo"] -= $valor;
                $this->contas[$numContaDestino]["saldo"] += $valor;
                echo "Transferência de R$" . number_format($valor, 2, ',', '.') . " realizada com sucesso.\n";
            } else {
                echo "Saldo insuficiente para transferência ou valor inválido.\n";
            }
        } else {
            echo "Conta de origem ou destino não encontrada.\n";
        }
    }
}

// Cria uma instância da classe ContaBancaria
$contaBancaria = new ContaBancaria();

// Exemplo de uso:
// Exibir informações das contas
$contaBancaria->exibirConta("123");
$contaBancaria->exibirConta("456");
$contaBancaria->exibirConta("789");

// Realizar operações nas contas
$contaBancaria->sacar("123", 500);
$contaBancaria->pagar("456", 100);
$contaBancaria->transferir("789", "123", 700);

