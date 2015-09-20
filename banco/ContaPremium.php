<?php

class ContaPremium extends Conta
{

    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculoDeposito($valor)
    {
        $valor_normal = parent::calculoDeposito($valor);

        return $valor_normal += 20;
    }

}