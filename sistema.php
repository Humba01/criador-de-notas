<?php

require_once 'autoload.php';

use Modelo\Model\Escritor;

$arquivo = 'Audi.txt';

$mensagem = 'Carros Audi:';

$escritor = new Escritor();
$escritor->criaArquivo($arquivo);
$escritor->escreveArquivo($arquivo, $mensagem);
