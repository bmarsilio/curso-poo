<?php

require_once('PessoaFisica.php');
require_once('PessoaJuridica.php');

class Cliente
{
    /**
     * Cliente constructor.
     * @param $tipo
     */
    public function __construct()
    {
        
    }
    
    public function clienteFisica($nome, $cpf, $idade)
    {
        return new PessoaFisica($nome, $cpf, $idade);
    }

    public function clienteJuridica($razao_social, $cnpj)
    {
        return new PessoaJuridica($razao_social, $cnpj);
    }

}