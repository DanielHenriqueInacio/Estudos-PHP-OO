<?php

namespace Aulas;

interface VeiculoInterface
{
    public function acelerar(int $velocidadeMaxima): void;
}