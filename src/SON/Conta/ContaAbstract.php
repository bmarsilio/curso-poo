<?php

namespace SON\Conta;

use SON\Conta\Util\ProcessoTrait;

abstract class ContaAbstract
{
    use ProcessoTrait;
    protected $saldo;

    public final function depositar($valor)
    {
        $this->iniciarProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->finalizarProcesso();

        return true;
    }

    public function sacar($valor)
    {
        $this->iniciarProcesso();
        if($this->saldo >= $valor) {
            $this->saldo -= $valor;
            $this->finalizarProcesso();

            return true;
        }

        $this->finalizarProcesso();

        return false;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    abstract protected function calculoDeposito($valor);

}