<?php

namespace Bbarbosa7\DesignPattern\Descontos;

use Bbarbosa7\DesignPattern\Orcamento;

class DescontoMaisQuinhentosBrl extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto($orcamento);
    }
}