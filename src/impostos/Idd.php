<?php

namespace Bbarbosa7\DesignPattern\Impostos;

use Bbarbosa7\DesignPattern\Orcamento;

class  Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.03;
        }        
    
        return $orcamento->valor * 0.02;
    }
}