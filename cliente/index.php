<?php

require_once('Cliente.php');

$clientes = [
    new Cliente('Bruno','123456789123','20','rua das camelias, 123'),
    new Cliente('Pedro','123456789123','21','rua das camelias, 124'),
    new Cliente('Eduardo','123456789123','22','rua das camelias, 125'),
    new Cliente('Junior','123456789123','23','rua das camelias, 126'),
    new Cliente('Joao','123456789123','24','rua das camelias, 127'),
    new Cliente('Joana','123456789123','25','rua das camelias, 128'),
    new Cliente('Gustavo','123456789123','26','rua das camelias, 129'),
    new Cliente('Eduarda','123456789123','27','rua das camelias, 130'),
    new Cliente('Natalia','123456789123','28','rua das camelias, 131'),
    new Cliente('Ana','123456789123','29','rua das camelias, 132'),
];

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
        <h4>Ordenação</h4>
        <a class="btn btn-primary" href="index.php?ordem=asc"><span class="glyphicon glyphicon-arrow-up"></span> Ascendente</a>
        <a class="btn btn-primary" href="index.php?ordem=desc"><span class="glyphicon glyphicon-arrow-down"></span> Descendente</a>
    </div>

    <hr />

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <?php
        foreach($clientes as $k => $cliente) {
            echo("<li role=\"presentation\"><a href=\"#$k\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">".$k." - ".$cliente->getNome()."</a></li>");
        }
        ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <?php
        foreach($clientes as $k => $cliente) {
            echo("
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"$k\">
                            Nome: ".$cliente->getNome()."<br />
                            Cpf: ".$cliente->getCpf()."<br />
                            Idade: ".$cliente->getIdade()."<br />
                            Endereço: ".$cliente->getEndereco()."
                        </div>
                    ");
        }
        ?>

    </div>

</div>


</body>
</html>
