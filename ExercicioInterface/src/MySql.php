<?php

namespace App;

class MySql implements DataBaseInterface
{
    public function Gravar(): void
    {
        echo "Gravando no MySql." . PHP_EOL;
    }

    public function Listar(): void
    {
        // TODO: Implement Listar() method.
    }
}