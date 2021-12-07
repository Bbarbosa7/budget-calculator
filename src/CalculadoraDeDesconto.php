<?php

namespace Bbarbosa7\DesignPattern;

use Bbarbosa7\DesignPattern\Descontos\DescontoMaisDeCincoItens;
use Bbarbosa7\DesignPattern\Descontos\DescontoMaisQuinhentosBrl;
use Bbarbosa7\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDesconto
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoMaisQuinhentosBrl(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);

    }
}