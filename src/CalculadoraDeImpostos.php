<?php

namespace Bbarbosa7\DesignPattern;

use Bbarbosa7\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    /**
     * Como teríamos um método q cresceria sempre e q poderia gerar bugs
     * Vamos resolver trocando o switch (poderia ser varios if's tbm) pelo padrão Strategy
     * Criando uma interface (neste caso a interface imposto) e p casa imposto criamos uma classe 
     * assim temos funções e responsabilidades definidas e sem risco de quebrar nosso código
     */
    // public function calcula(Orcamento $orcamento, string $tipoImposto) : float
    // {
    //     switch ($tipoImposto) {
    //         case "icms":
    //             return $orcamento->valor * 0.1;
    //         case "iss":
    //             return $orcamento->valor * 0.06;
    //     }
    // }

    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }

}