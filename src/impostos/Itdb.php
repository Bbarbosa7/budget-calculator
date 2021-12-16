<?php

namespace Bbarbosa7\DesignPattern\Impostos;

use Bbarbosa7\DesignPattern\Impostos\Imposto;
use Bbarbosa7\DesignPattern\Orcamento;

class Itdb extends ImpostoComDuasAliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}