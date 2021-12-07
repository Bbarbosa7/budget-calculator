<?php

namespace Bbarbosa7\DesignPattern\Impostos;

use Bbarbosa7\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}