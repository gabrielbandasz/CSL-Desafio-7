<?php
class carro {
    
    private string $modelo;
    private string $combustivel; //etanol ou gasolina
    private float $tanquecheio; //litros
    private float $consumo; //km/litro

    public function __construct($modelo, $combustivel, $tanquecheio, $consumo) {
        $this->modelo = $modelo;
        $this->combustivel = $combustivel;
        $this->tanquecheio = $tanquecheio;
        $this->consumo = $consumo;
    }

    public function calcularAutonomia() {
        return $this->tanquecheio * $this->consumo;
    }

    public function custo() { //custo por km(com preço do combustível)
        $preco = $this->combustivel === 'etanol' ? 4.50 : 5.50; //exemplo de preços
        return $preco / $this->consumo;
           }

    public function revisao() {
        $autonomia = $this->calcularAutonomia();
        if ($autonomia < 500) {
            return "Revisão necessária: autonomia de {$autonomia} km.";
        } else {
            return "Revisão não necessária: autonomia de {$autonomia} km.";
        }
    }

    public function exibirDetalhes() {
        return "
        <ul>
            <li>Modelo: {$this->modelo}</li>
            <li>Combustível: {$this->combustivel}</li>
            <li>Tanque cheio: " . number_format($this->tanquecheio, 2, ',', '.') . " litros</li>
            <li>Consumo: " . number_format($this->consumo, 2, ',', '.') . " km/l</li>
            <li>Autonomia: " . number_format($this->calcularAutonomia(), 2, ',', '.') . " km</li>
            <li>Custo por km: R$ " . number_format($this->custo(), 2, ',', '.') . "</li>
            <li>" . $this->revisao() . "</li>
        </ul>
        ";
    }
           }
           ?>