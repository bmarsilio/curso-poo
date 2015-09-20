<?php

require_once 'Pessoa.php';

$pessoa1 = new Pessoa('Bruno', 20);

$pessoa2 = new Pessoa('Pedrinho', 15);

require_once 'Produto.php';
require_once 'Tenis.php';

$tenis = new TenisAdidas();

$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getTamanho();