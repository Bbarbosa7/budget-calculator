<?php

use Bbarbosa7\DesignPattern\CalculadoraDeDesconto;
use Bbarbosa7\DesignPattern\CalculadoraDeImpostos;
use Bbarbosa7\DesignPattern\Impostos\Icms;
use Bbarbosa7\DesignPattern\Impostos\Iss;
use Bbarbosa7\DesignPattern\Orcamento;

require 'vendor/autoload.php';

/*
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, 'iss');

echo $calculadora->calcula($orcamento, new Iss());
*/

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);