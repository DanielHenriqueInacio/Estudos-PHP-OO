<?php

namespace Aulas\Produtos;

class ProdutosLoja extends Produto
{
    public int $id;
    public string $nome;
    public float $preco;
    public Categorias $categoria;


    public function __construct(int $idC, string $nomeC, float $precoC, Categorias $categoriaC)
    {
        $this->id = $idC;
        $this->nome = $nomeC;
        $this->preco = $precoC;
        $this->categoria = $categoriaC;

        echo "INICIANDO A CLASSE PRODUTOS DA LOJA." . PHP_EOL;
    }

    public function __destruct() // NÃO É TÃO USADO.
    {
        echo "FINALIZANDO A CLASSE PRODUTOS DA LOJA." . PHP_EOL;
    }

    public function __toString()
    {
        $texto  = "Id: " . $this->id . PHP_EOL;
        $texto .= "Nome: " . $this->nome . PHP_EOL;
        $texto .= "Preço: " . $this->preco . PHP_EOL;
        $texto .= "Categoria: " . $this->categoria->nome . PHP_EOL;
        return $texto;
    }
}