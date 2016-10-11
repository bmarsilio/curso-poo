<?php

/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 11/10/16
 * Time: 00:16
 */
interface PessoaInterface
{
    public function getEndereco();
    public function setEndereco($endereco);

    public function getEnderecoCobranca();
    public function setEnderecoCobranca($endereco);
}