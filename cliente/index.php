<?php

require_once('Cliente.php');

$clientes = [
    new Cliente(),
    new Cliente(),
    new Cliente(),
    new Cliente(),
    new Cliente(),

    new Cliente(),
    new Cliente(),
    new Cliente(),
    new Cliente(),
    new Cliente(),
];

foreach ($clientes as $k => $cliente) {
    if($k < 5) {
        $clientes[$k] = $cliente->clienteFisica("Bruno $k", "03686644061", "2$k");
    } else {
        $clientes[$k] = $cliente->clienteJuridica("Empresa $k", "045161170001$k");
    }

    $clientes[$k]->setEndereco("Rua $k");
    $clientes[$k]->setImportancia("$k");
    $clientes[$k]->setEnderecoCobranca("Rua de cobrança $k");
}

if($_GET['ordem'] == 'asc') {
    ksort($clientes);
}

if($_GET['ordem'] == 'desc') {
    krsort($clientes);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div>
        <h4>Ordenacao</h4>
        <a class="btn btn-primary" href="index.php?ordem=asc"><span class="glyphicon glyphicon-arrow-up"></span> Ascendente</a>
        <a class="btn btn-primary" href="index.php?ordem=desc"><span class="glyphicon glyphicon-arrow-down"></span> Descendente</a>
    </div>

    <hr />

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <?php
        foreach($clientes as $k => $cliente) {

            if(is_a($cliente, 'PessoaFisica')) {
                $nome = $cliente->getNome();
                $cpf = $cliente->getCpf();
                $cnpj = '-';
                $idade = $cliente->getIdade();
                $tipo = 'Pessoa Física';
            } else if(is_a($cliente, 'PessoaJuridica')) {
                $nome = $cliente->getRazaoSocial();
                $cpf = '-';
                $cnpj = $cliente->getCnpj();
                $idade = '-';
                $tipo = 'Pessoa Jurídica';
            }

            echo("<li role=\"presentation\"><a href=\"#$k\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">".$k." - ".$nome."</a></li>");
        }
        ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <?php
        foreach($clientes as $k => $cliente) {

            if(is_a($cliente, 'PessoaFisica')) {
                $nome = $cliente->getNome();
                $cpf = $cliente->getCpf();
                $cnpj = '';
                $idade = $cliente->getIdade();
                $tipo = 'Pessoa Física';
            } else if(is_a($cliente, 'PessoaJuridica')) {
                $nome = $cliente->getRazaoSocial();
                $cpf = '-';
                $cnpj = $cliente->getCnpj();
                $idade = '-';
                $tipo = 'Pessoa Jurídica';
            }

            echo("
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"$k\">
                            Nome: ".$nome."<br />
                            Cpf: ".$cpf."<br />
                            Cnpj: ".$cnpj."<br />
                            Idade: ".$idade."<br />
                            Endereço: ".$cliente->getEndereco()."<br />
                            Endereço cobrança: ".$cliente->getEnderecoCobranca()."<br />
                            Importância: ".$cliente->getImportancia()."<br />
                            Tipo: ".$tipo."
                        </div>
                    ");
        }
        ?>

    </div>

</div>


</body>
</html>
