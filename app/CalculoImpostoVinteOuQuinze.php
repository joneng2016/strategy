<?php 

namespace App;

class CalculoImpostoVinteOuQuinze extends CalculadoraImposto {

    public function calculaSalarioComImposto(Funcionario $functionario)
    {
        if($functionario->getSalarioBase() > 5000)
            return $funcionario->getSalarioBase()*0.80;
        return $functionario->getSalarioBase()*0.85;
    }
}
