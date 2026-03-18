<?php

class CalculadoraGeometrica {
    private string $figura;
    private float $medida1;
    private float $medida2;

    public function __construct(string $figura, float $medida1, float $medida2 = 0) {
        $this->figura  = $figura;
        $this->medida1 = $medida1;
        $this->medida2 = $medida2;
    }

    public function calcularArea(): float {
        switch ($this->figura) {
            case 'quadrado':
                return $this->medida1 ** 2;

            case 'retangulo':
                return $this->medida1 * $this->medida2;

            case 'circulo':
                return M_PI * ($this->medida1 ** 2);

            default:
                return 0.0;
        }
    }

    public function nomeFigura(): string {
        switch ($this->figura) {
            case 'quadrado':  return 'Quadrado';
            case 'retangulo': return 'Retângulo';
            case 'circulo':   return 'Círculo';
            default:          return 'Desconhecida';
        }
    }

    public function exibirDetalhes(): string {
        $area   = number_format($this->calcularArea(), 2, ',', '.');
        $figura = $this->nomeFigura();

        $medidas = match ($this->figura) {
            'quadrado'  => "<li>Lado: " . number_format($this->medida1, 2, ',', '.') . " cm</li>",
            'retangulo' => "<li>Base: " . number_format($this->medida1, 2, ',', '.') . " cm</li>
                            <li>Altura: " . number_format($this->medida2, 2, ',', '.') . " cm</li>",
            'circulo'   => "<li>Raio: " . number_format($this->medida1, 2, ',', '.') . " cm</li>",
            default     => ''
        };

        return "
        <ul>
            <li>Figura: {$figura}</li>
            {$medidas}
            <li>Área: {$area} cm²</li>
        </ul>
        ";
    }
}