<?php

class CalculadoraFinanceira {
    private float $valor;
    private int $parcelas;
    private float $taxaJuros; // taxa mensal em % (ex: 2.5 para 2,5%)

    public function __construct(float $valor, int $parcelas, float $taxaJuros) {
        $this->valor = $valor;
        $this->parcelas = $parcelas;
        $this->taxaJuros = $taxaJuros / 100; // converte para decimal
    }

    // Fórmula: parcela = valor * (taxa) / (1 - (1 + taxa)^-n)
    // Para juros = 0, divide igualmente
    public function valorParcela(): float {
        if ($this->taxaJuros == 0) {
            return $this->valor / $this->parcelas;
        }
        $taxa = $this->taxaJuros;
        $n = $this->parcelas;
        return $this->valor * $taxa / (1 - pow(1 + $taxa, -$n));
    }

    public function totalAPagar(): float {
        return $this->valorParcela() * $this->parcelas;
    }

    public function jurospagos(): float {
        return $this->totalAPagar() - $this->valor;
    }

    public function exibirDetalhes(): string {
        $parcela   = number_format($this->valorParcela(), 2, ',', '.');
        $total     = number_format($this->totalAPagar(),  2, ',', '.');
        $juros     = number_format($this->jurospagos(),   2, ',', '.');
        $valorOrig = number_format($this->valor,          2, ',', '.');
        $taxa      = number_format($this->taxaJuros * 100, 2, ',', '.');

        return "
        <ul>
            <li>Valor da Compra: R$ {$valorOrig}</li>
            <li>Número de Parcelas: {$this->parcelas}x</li>
            <li>Taxa de Juros Mensal: {$taxa}%</li>
            <li>Valor de Cada Parcela: R$ {$parcela}</li>
            <li>Total a Pagar: R$ {$total}</li>
            <li>Juros Pagos (diferença): R$ {$juros}</li>
        </ul>
        ";
    }
}