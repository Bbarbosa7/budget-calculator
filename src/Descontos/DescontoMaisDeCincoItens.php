<?php

namespace Bbarbosa7\DesignPattern\Descontos;

use Bbarbosa7\DesignPattern\Orcamento;

class DescontoMaisDeCincoItens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto($orcamento);
    }
}