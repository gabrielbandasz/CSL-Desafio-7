<?php
class conversorMoeda {
    private float $valor;
    private string $moedaOrigem;
    private string $moedaDestino;

    public function __construct($valor, $moedaOrigem, $moedaDestino) {
        $this->valor = $valor;
        $this->moedaOrigem = $moedaOrigem;
        $this->moedaDestino = $moedaDestino;
    }

    public function converter() {
        // Taxas de conversão fictícias
        $taxas = [
            'USD' => ['EUR' => 0.85, 'BRL' => 5.25],
            'EUR' => ['USD' => 1.18, 'BRL' => 6.15],
            'BRL' => ['USD' => 0.19, 'EUR' => 0.16]
        ];

        if (!isset($taxas[$this->moedaOrigem][$this->moedaDestino])) {
            return "Conversão não suportada.";
        }

        return $this->valor * $taxas[$this->moedaOrigem][$this->moedaDestino];

    }
    public function exibirDetalhes() {
        $valorConvertido = $this->converter();
        return "
        <ul>
            <li>Valor Original: " . number_format($this->valor, 2, ',', '.') . " {$this->moedaOrigem}</li>
            <li>Moeda de Origem: {$this->moedaOrigem}</li>
            <li>Moeda de Destino: {$this->moedaDestino}</li>
            <li><strong>Valor Convertido: " . number_format($valorConvertido, 2, ',', '.') . " {$this->moedaDestino}</strong></li>
        </ul>
        ";
    }
}
?>