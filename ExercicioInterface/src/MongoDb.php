<?php

namespace App;

class MongoDb implements DataBaseInterface
{
    public function Gravar(): void
    {
        echo "Gravando no MongoDb." . PHP_EOL;
    }

    public function Listar(): void
    {
        // TODO: Implement Listar() method.
    }
}