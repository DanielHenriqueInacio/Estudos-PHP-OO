<?php
include "vendor/autoload.php";
use App\Cadastros\Produtos\Loja;
use App\Cadastros\Fornecedores\Cafe;

$produtoLoja = new Loja();
$produtoLoja->salvar();

$fornecedorCafe = new Cafe();
$fornecedorCafe->salvar();