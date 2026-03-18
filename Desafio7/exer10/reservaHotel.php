<?php

class ReservaHotel {
    private string $nomeHospede;
    private int $noites;
    private string $tipoQuarto;

    private array $precos = [
        'simples' => 120.00,
        'luxo'    => 200.00,
        'suite'   => 350.00,
    ];

    public function __construct(string $nomeHospede, int $noites, string $tipoQuarto) {
        $this->nomeHospede = $nomeHospede;
        $this->noites      = $noites;
        $this->tipoQuarto  = $tipoQuarto;
    }

    public function precoPorNoite(): float {
        return $this->precos[$this->tipoQuarto] ?? 0.0;
    }

    public function valorBruto(): float {
        return $this->precoPorNoite() * $this->noites;
    }

    public function desconto(): float {
        if ($this->noites > 5) {
            return $this->valorBruto() * 0.10; // 10% de desconto
        }
        return 0.0;
    }

    public function valorTotal(): float {
        return $this->valorBruto() - $this->desconto();
    }

    public function mensagemBoasVindas(): string {
        return "Bem-vindo(a), {$this->nomeHospede}! Sua reserva foi realizada com sucesso.";
    }

    public function exibirDetalhes(): string {
        $precoNoite  = number_format($this->precoPorNoite(), 2, ',', '.');
        $valorBruto  = number_format($this->valorBruto(),    2, ',', '.');
        $desconto    = number_format($this->desconto(),      2, ',', '.');
        $valorTotal  = number_format($this->valorTotal(),    2, ',', '.');
        $tipoExibir  = ucfirst($this->tipoQuarto);
        $temDesconto = $this->noites > 5 ? "Sim (10%)" : "Não";

        return "
        <p><strong>{$this->mensagemBoasVindas()}</strong></p>
        <ul>
            <li>Hóspede: {$this->nomeHospede}</li>
            <li>Tipo de Quarto: {$tipoExibir}</li>
            <li>Diária: R$ {$precoNoite}</li>
            <li>Número de Noites: {$this->noites}</li>
            <li>Valor Bruto: R$ {$valorBruto}</li>
            <li>Desconto (acima de 5 noites): {$temDesconto}</li>
            <li>Desconto aplicado: R$ {$desconto}</li>
            <li>Valor Total: R$ {$valorTotal}</li>
        </ul>
        ";
    }
}