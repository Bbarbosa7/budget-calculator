<?php

namespace Bbarbosa7\DesignPattern\Impostos;

use Bbarbosa7\DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}