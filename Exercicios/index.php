<?php

include "../vendor/autoload.php";
use Exercicios\Cachorro;
use Exercicios\Gato;

$melissa = new Cachorro();
$melissa->nome = "Melissa";
$melissa->cor = "Amarela";
$melissa->raca = "Vira-Lata";
$melissa->nascimento = new DateTime("2016-12-31 12:10:54");
$melissa->peso = 18;
$melissa->som = "Au";
$melissa->brincar();

echo $melissa->sonido(10);
echo $melissa . PHP_EOL;

$mia = new Gato();
$mia->nome = "Mia";
$mia->cor = "Amarela";
$mia->raca = "Vira-Gato";
$mia->nascimento = new DateTime("2015-03-13 12:10:54");
$mia->peso = 5;
$mia->som = "Miau";
$mia->brincar();

echo $mia->sonido(3);
echo $mia;