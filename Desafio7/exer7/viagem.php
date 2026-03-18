<?php
class Viagem {
private string $origem;    
private string $destino;
private float $distancia;
private float $tempoEstimado;
private string $tipoVeiculo; //com consumo

public function __construct($origem, $destino, $distancia, $tempoEstimado, $tipoVeiculo) {
    $this->origem = $origem;
    $this->destino = $destino;
    $this->distancia = $distancia;
    $this->tempoEstimado = $tempoEstimado;
    $this->tipoVeiculo = $tipoVeiculo;
}

public function velocidadeMedia() {
    return $this->distancia / $this->tempoEstimado;
}

public function consumoEstimado() {
    $consumo = $this->tipoVeiculo === 'carro' ? 12 : 3; //exemplo de consumo
    return $this->distancia / $consumo;
}

public function custoViagem() {
    $precoCombustivel = $this->tipoVeiculo === 'carro' ? 5.50 : 4.50; //exemplo de preços
    return $this->consumoEstimado() * $precoCombustivel;
}

public function exibirDetalhes() {
    return "
    <ul>
        <li>Origem: {$this->origem}</li>
        <li>Destino: {$this->destino}</li>
        <li>Distância: " . number_format($this->distancia, 2, ',', '.') . " km</li>
        <li>Tempo Estimado: " . number_format($this->tempoEstimado, 2, ',', '.') . " horas</li>
        <li>Tipo de Veículo: {$this->tipoVeiculo}</li>
        <li>Velocidade Média: " . number_format($this->velocidadeMedia(), 2, ',', '.') . " km/h</li>
        <li>Consumo Estimado: " . number_format($this->consumoEstimado(), 2, ',', '.') . " litros</li>
        <li>Custo da Viagem: R$ " . number_format($this->custoViagem(), 2, ',', '.') . "</li>
    </ul>
    ";
}
}