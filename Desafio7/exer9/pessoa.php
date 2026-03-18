<?php

class Pessoa {
    private string $nome;
    private float $peso;
    private float $altura;

    public function __construct(string $nome, float $peso, float $altura) {
        $this->nome   = $nome;
        $this->peso   = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC(): float {
        return $this->peso / ($this->altura ** 2);
    }

    public function classificarIMC(): string {
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return 'Abaixo do peso';
        } elseif ($imc < 25.0) {
            return 'Peso normal';
        } elseif ($imc < 30.0) {
            return 'Sobrepeso';
        } else {
            return 'Obesidade';
        }
    }

    public function exibirDetalhes(): string {
        $imc            = number_format($this->calcularIMC(), 2, ',', '.');
        $classificacao  = $this->classificarIMC();
        $peso           = number_format($this->peso,   2, ',', '.');
        $altura         = number_format($this->altura, 2, ',', '.');

        return "
        <ul>
            <li>Nome: {$this->nome}</li>
            <li>Peso: {$peso} kg</li>
            <li>Altura: {$altura} m</li>
            <li>IMC: {$imc}</li>
            <li>Classificação: {$classificacao}</li>
        </ul>
        ";
    }
}