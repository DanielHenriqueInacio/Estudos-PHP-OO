<?php

namespace Exercicios;
use DateTime;

abstract class Animal extends BaseAnimal
{

    public string $nome;
    public string $raca;
    public string $cor;
    public DateTime $nascimento;
    public int $peso;
    public string $som;

    public function sonido(int $qtdsonido): string
    {
        if ($qtdsonido < 0) {
            return "Numeros dos sons emitidos não pode ser menor do que 0" . PHP_EOL;
        }

        $sonidos = "";
        $i = 0;
        while ($i < $qtdsonido) {
            $sonidos .= $this->som . " ";
            $i++;
        }
        $sonidos .= PHP_EOL;
        return $sonidos;
    }

    public function __toString()
    {
        return "Meu nome é {$this->nome}, sou um(a) {$this->raca}." . PHP_EOL;
    }
}