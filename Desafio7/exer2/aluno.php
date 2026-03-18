<?php
class Aluno {
    private string $nome;
    private string $disciplina;
    private float $nota1;
    private float $nota2;
    private float $nota3;

    public function __construct($nome, $disciplina, $nota1, $nota2, $nota3) {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }
    
    public function exibirResultado() {
        $media = $this->calcularMedia();
        $status = //0-4 = em recuperação, 4,1 - 6 = reprovado, 6,1 - 10 = aprovado com louvor
            $media < 4 ? 'Em Recuperação' :
            ($media < 6 ? 'Reprovado' : 'Aprovado');
            

        return "
        <ul>
            <li>Aluno: {$this->nome}</li>
            <li>Disciplina: {$this->disciplina}</li>
            <li>Nota 1: " . number_format($this->nota1, 2, ',', '.') . "</li>
            <li>Nota 2: " . number_format($this->nota2, 2, ',', '.') . "</li>
            <li>Nota 3: " . number_format($this->nota3, 2, ',', '.') . "</li>
            <li><strong>Média: " . number_format($media, 2, ',', '.') . " - {$status}</strong></li>
        </ul>
        ";
    }
}
?>