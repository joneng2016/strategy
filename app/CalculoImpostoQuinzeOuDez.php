<?php 

namespace App;

class CalculoImpostoQuinzeOuDez extends CalculadoraImposto {

    public function calculaSalarioComImposto(Funcionario $functionario)
    {
        if($functionario->getSalarioBase() > 2000)
            return $funcionario->getSalarioBase()*0.85;
        return $functionario->getSalarioBase()*0.9;
    }
}
