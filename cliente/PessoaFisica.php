<?php

require_once('PessoaInterface.php');
require_once('ImportanciaInterface.php');

/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 10/10/16
 * Time: 23:44
 */
class PessoaFisica implements PessoaInterface, ImportanciaInterface
{

    protected $nome;
    protected $cpf;
    protected $idade;
    protected $endereco;
    protected $endereco_cobranca;
    protected $importancia;

    /**
     * PessoaFisica constructor.
     * @param $nome
     */
    public function __construct($nome, $cpf, $idade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
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