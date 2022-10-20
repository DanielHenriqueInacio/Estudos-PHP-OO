<?php

namespace App;

interface DataBaseInterface
{
    public function Gravar(): void;
    public function Listar(): void;
}