<?php
class Produto {
    private string $nome;
    private float $valor;
    private int $quantidadeemestoque;

    public function __construct($nome, $valor, $quantidadeemestoque) {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidadeemestoque = $quantidadeemestoque;
    }

    public function entradaNoEstoque($quantidade) {
        $this->quantidadeemestoque += $quantidade;
    }

    public function saidaDoEstoque($quantidade) {
        if ($quantidade > $this->quantidadeemestoque) {
            return "Quantidade insuficiente em estoque.";
        }
        $this->quantidadeemestoque -= $quantidade;
    }

    public function consultaDeValorTotalEmEstoque() {
        return $this->valor * $this->quantidadeemestoque;
    }

    public function exibirDetalhes() {
        return "
        <ul>
            <li>Produto: {$this->nome}</li>
            <li>Valor Unitário: R$ " . number_format($this->valor, 2, ',', '.') . "</li>
            <li>Quantidade em Estoque: {$this->quantidadeemestoque}</li>
            <li><strong>Valor Total em Estoque: R$ " . number_format($this->consultaDeValorTotalEmEstoque(), 2, ',', '.') . "</strong></li>
        </ul>
        ";
    }
    }
    ?>