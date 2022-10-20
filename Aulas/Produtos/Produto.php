<?php

namespace Aulas\Produtos;

class Produto
{

    public function Gravar(int $id = null): void
    {
        if (is_null($id)) {
            echo "Criando um novo registro!" . PHP_EOL;
        } else {
            $this->pegarProdutoPorId($id);
        }
    }

    public function Listar(): void
    {
        echo "Listando produtos!" . PHP_EOL;
    }

    protected function pegarProdutoPorId(int $id): void
    {
        echo "Pegando produto pela id $id." . PHP_EOL;
    }
}