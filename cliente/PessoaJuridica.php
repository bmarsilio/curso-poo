<?php

require_once('PessoaInterface.php');
require_once('ImportanciaInterface.php');

/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 10/10/16
 * Time: 23:44
 */
class PessoaJuridica implements PessoaInterface, ImportanciaInterface
{

    protected $razao_social;
    protected $cnpj;
    protected $endereco;
    protected $endereco_cobranca;
    protected $importancia;

    /**
     * PessoaJuridica constructor.
     * @param $razao_social
     */
    public function __construct($razao_social, $cnpj)
    {
        $this->razao_social = $razao_social;
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    /**
     * @param mixed $razao_social
     */
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEnderecoCobranca()
    {
        return $this->endereco_cobranca;
    }

    public function setEnderecoCobranca($endereco)
    {
        $this->endereco_cobranca = $endereco;
    }

    public function getImportancia()
    {
        return $this->importancia;
    }

    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
    }
}