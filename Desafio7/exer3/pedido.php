<?php
class pedido {
    private string $nome;
    private int $quantidade;
    private float $precoUnitario;
    private String $tipo; //cliente premium ou comum

    public function __construct($nome, $quantidade, $precoUnitario, $tipo) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        $this->tipo = $tipo;
    }

    public function calcularValorTotal() {
        $valorTotal = $this->quantidade * $this->precoUnitario;
        if ($this->tipo === 'premium') {
            $valorTotal *= 0.9; // 10% de desconto
        }
        return $valorTotal;
    }

    public function imposto(){
        $valorTotal = $this->calcularValorTotal();
        return $valorTotal * 0.10; // 10% de imposto
    }

    public function exibirDetalhes() {
        $valorTotal = $this->calcularValorTotal();
        $imposto = $this->imposto();
        return "
        <ul>
            <li>Produto: {$this->nome}</li>
            <li>Quantidade: {$this->quantidade}</li>
            <li>Preço Unitário: R$ " . number_format($this->precoUnitario, 2, ',', '.') . "</li>
            <li>Tipo de Cliente: {$this->tipo}</li>
            <li><strong>Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "</strong></li>
            <li><strong>Imposto: R$ " . number_format($imposto, 2, ',', '.') . "</strong></li>
        </ul>
        ";
    }
}
?>