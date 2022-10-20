<?php

namespace Aulas;

use Aulas\VeiculoInterface;

class Aviao implements VeiculoInterface
{
    public function acelerar(int $velocidadeMaxima): void
    {
        echo "VRRUMMMMMM!!!! " . PHP_EOL;
    }
}