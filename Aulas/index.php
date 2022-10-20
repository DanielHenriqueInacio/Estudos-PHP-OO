<?php
declare(strict_types=1);
include "../vendor/autoload.php";

use Aulas\Produtos\Categorias;
use Aulas\Produtos\ProdutosLoja;

$categoria = new Categorias();
$categoria->nome = "Calçados";

$produto = new ProdutosLoja(1, "Sapato", 89.90, $categoria);
$produto->Gravar(3);
echo $produto;



//
//use Aulas\{Marca, Carro, Onibus, Aviao};
//
//$marcaTortuguita = new Marca();
//$marcaTortuguita->nome = "Ford";
//
//$tortuguita = new Carro();
//$tortuguita->marca = $marcaTortuguita;
//$tortuguita->modelo = "Focus";
//$tortuguita->cor = "Prata";
//$tortuguita->anoFabricacao = '2006';
//$tortuguita->placa = "ASM0B64";
//$tortuguita->preco = 40000;
//
//echo $tortuguita->marca->nome . " - " . $tortuguita->modelo . PHP_EOL;
//$tortuguita->acelerar(120);
//
//
//$marcaCanabrava = new Marca();
//$marcaCanabrava->nome = "Hyundai";
//
//$canabrava = new Carro();
//$canabrava->marca = $marcaCanabrava;
//$canabrava->modelo = "Tucson";
//$canabrava->anoFabricacao = "2009";
//$canabrava->placa = "ACD0000";
//$canabrava->cor = "Prata";
//$canabrava->preco = 60000;
//
//echo $canabrava->marca->nome . " - " . $canabrava->modelo . PHP_EOL;
//$canabrava->acelerar(80);
//
//$marcaOnibus = new Marca();
//$marcaOnibus->nome = "Volvo";
//
//$onibus1 = new Onibus();
//$onibus1->marca = $marcaOnibus;
//$onibus1->modelo = "ABC123";
//$onibus1->anoFabricacao = "2009";
//$onibus1->placa = "ACD3143";
//$onibus1->cor = "Azul";
//$onibus1->preco = 260000;
//$onibus1->intinerario = ['Curitiba', 'SJRP'];
//echo $onibus1->capacidade();
//
//$aviao = new Aviao();
//$aviao->acelerar(1);