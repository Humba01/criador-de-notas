<?php

namespace Modelo\Service;

class User
{
    public function userInterface0()
    {
        echo 'Aplicativos Disponíveis:' . PHP_EOL;
        echo '1 => Escritor' . PHP_EOL;
        echo '2 => Calculadora' . PHP_EOL;

        $resposta = fgets(STDIN);

        /* if ($resposta = '1') {
            // userInterface1();
            return;
        } else if ($resposta = '2') {
            // userInterface2();
            return;
        } else {*/
        echo 'Opção Inexistente!';
        return;
        // }
    }
}
