<?php
spl_autoload_register(function (string $nomeClasse) {
    $arquivo = str_replace('Modelo\\Model', 'Model', $nomeClasse);
    $arquivo = str_replace('\\', DIRECTORY_SEPARATOR, $arquivo);
    $arquivo .= '.php';

    if (file_exists($arquivo)) {
        require_once $arquivo;
    }
});
