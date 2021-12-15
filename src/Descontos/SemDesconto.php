<?php

namespace Bbarbosa7\DesignPattern\Descontos;

use Bbarbosa7\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return $orcamento->valor;
    }
}