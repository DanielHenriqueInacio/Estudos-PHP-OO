<?php
namespace Aulas;


class Veiculo
{
    public Marca $marca; //Associação
    public string $modelo;
    public string $cor;
    public string $placa;
    public string $anoFabricacao;
    public float $preco;
    public int $km;

    public function acelerar(int $velocidadeMaxima): void
    {
        $velocidade = 0;
        while ($velocidade <= $velocidadeMaxima) {
            echo $velocidade . PHP_EOL;
            $velocidade += 10;
        }
    }

    public function mostrarKm(): int
    {
        return $this->km;
    }
}