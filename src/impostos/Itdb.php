<?php

namespace Bbarbosa7\DesignPattern\Impostos;

use Bbarbosa7\DesignPattern\Impostos\Imposto;
use Bbarbosa7\DesignPattern\Orcamento;

class Itdb implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 300 && $orcamento->quantidadeItens > 3) {
            return $orcamento->valor * 0.04;
        }

        return $orcamento->valor * 0.025;
    }
}