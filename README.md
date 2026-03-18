# 📚 Exercícios de PHP Orientado a Objetos

Coleção de exercícios práticos com **classes PHP + formulários HTML**, seguindo o padrão do Exercício 1 (Classe Funcionário) como referência.

---

## 📁 Estrutura de Pastas

Cada exercício segue a mesma organização:

```
exercicioXX/
├── index.php       ← Formulário HTML + lógica de uso da classe
├── Classe.php      ← Classe PHP com métodos e encapsulamento
└── README.md       ← Enunciado com instruções
```

---

## 📋 Lista de Exercícios

### Exercício 01 – Classe `Funcionario` 
Formulário com nome, cargo, salário e carga horária.
- Resumo do funcionário
- Cálculo do valor da hora
- Salário com bônus e horas extras

---

### Exercício 02 – Classe `Aluno`
Formulário com nome, disciplina e três notas.
- Cálculo da média aritmética
- Status: **Aprovado** (média ≥ 7), **Recuperação** (média ≥ 5) ou **Reprovado**

**Habilidades:** validação de dados, lógica condicional, integração PHP + HTML

---

### Exercício 03 – Classe `Pedido`
Formulário com nome do produto, quantidade, preço unitário e tipo de cliente (normal/premium).
- Total bruto
- Desconto de 10% para clientes premium
- Imposto de 8%
- Total final

**Habilidades:** operações matemáticas, estrutura condicional, encapsulamento

---

### Exercício 04 – Classe `Carro`
Formulário com modelo, tipo de combustível (etanol/gasolina), capacidade do tanque e consumo (km/l).
- Autonomia total (km)
- Custo por km com base no preço do combustível
- Indicação se é hora da revisão com base nos km rodados

**Habilidades:** métodos auxiliares, reutilização de lógica, múltiplos inputs

---

### Exercício 05 – Classe `Produto`
Formulário com nome, quantidade em estoque e valor unitário. Simula movimentações de estoque.
- Entrada de produtos
- Saída de produtos
- Consulta do valor total em estoque

**Habilidades:** manipulação de estado interno, operações reais, encapsulamento

---

### Exercício 06 – Classe `ConversorMoeda`
Formulário com valor em reais, moeda destino (USD ou EUR) e cotação atual.
- Conversão com base na cotação informada
- Suporte a múltiplas moedas via `switch`

**Habilidades:** simulação de API com input manual, formatação numérica internacional

---

### Exercício 07 – Classe `Viagem`
Formulário com origem, destino, distância (km), tempo estimado (h) e tipo de veículo.
- Velocidade média
- Consumo estimado de combustível
- Custo total da viagem

**Habilidades:** reutilização de métodos, aplicação prática, múltiplos parâmetros

---

### Exercício 08 – Classe `CalculadoraFinanceira`
Formulário com valor da compra, número de parcelas e taxa de juros mensal.
- Valor de cada parcela (juros compostos)
- Total a pagar
- Diferença em juros pagos

> Fórmula: `parcela = valor × taxa / (1 - (1 + taxa)^-n)`

**Habilidades:** matemática financeira, `pow()`, `number_format()`

---

### Exercício 09 – Classe `Pessoa`
Formulário com nome, peso (kg) e altura (m).
- Cálculo do IMC: `peso / altura²`
- Classificação: Abaixo do peso / Normal / Sobrepeso / Obesidade

**Habilidades:** fórmulas com retorno condicional, manipulação de dados numéricos

---

### Exercício 10 – Classe `ReservaHotel`
Formulário com nome do hóspede, número de noites e tipo de quarto.

| Quarto  | Diária     |
|---------|------------|
| Simples | R$ 120,00  |
| Luxo    | R$ 200,00  |
| Suíte   | R$ 350,00  |

- Valor total da hospedagem
- Desconto de 10% para estadias acima de 5 noites
- Mensagem de boas-vindas personalizada

**Habilidades:** `array` ou `switch` para preços, métodos com e sem retorno, lógica de desconto

---

### Exercício 11 – Classe `CalculadoraGeometrica`
Formulário com escolha de figura (quadrado, retângulo ou círculo) e inserção das medidas.

| Figura     | Fórmula          |
|------------|------------------|
| Quadrado   | `lado²`          |
| Retângulo  | `base × altura`  |
| Círculo    | `π × raio²`      |

- Retorna o nome da figura e a área com 2 casas decimais
- Campos do formulário mudam dinamicamente conforme a figura selecionada

**Habilidades:** `switch`, constante `M_PI`, campos dinâmicos com JavaScript

---

## 🛠️ Como Executar

1. Certifique-se de ter o **PHP** instalado (versão 8.0 ou superior recomendada)
2. Navegue até a pasta do exercício desejado
3. Inicie o servidor embutido do PHP:

```bash
php -S localhost:8000
```

4. Acesse no navegador: [http://localhost:8000](http://localhost:8000)

---

## 💡 Conceitos Praticados

- Criação e instanciação de classes
- Propriedades privadas e encapsulamento
- Métodos com e sem retorno
- Integração de classes PHP com formulários HTML (`$_POST`)
- Formatação de valores com `number_format()`
- Estruturas de controle: `if/else`, `switch`, `match`
- Operações matemáticas: `pow()`, `M_PI`, `**`
