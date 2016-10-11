<?php

define("CLASS_DIR", __DIR__ . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR);

spl_autoload_register(function($class) {
    $className = CLASS_DIR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
    include($className);
});

$x = new SON\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();


/*
require_once('ContaType.php');
require_once('ContaPremiumType.php');

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);

echo $conta->getSaldo();
*/