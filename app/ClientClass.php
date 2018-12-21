<?php 

class ClientClassextends 
{
    public function run($programador)
    {
        $programadorJunior = new ProgramaJunior;
        $programadorPleno = new ProgramadorPleno;
        $programadorSenior = new ProgramadorSenior;
        
        if($programador == "programadorjunior")
            return  (new CalculoImpostoQuinzeOuDez($programadorJunior))->calculaSalarioComImposto();

    }
}
