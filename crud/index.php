<?php

require(__DIR__ . '/vendor/autoload.php'); //Utilizado para incluir um arquivo expecificado, porem se houver um erro irá esté será fatal, parando a execução do programa.

use \App\Entity\Vaga; //Utilizado para chamar uma determinada namespace

$vagas = Vaga::getVagas(); //Atribuindo valor retornando da função estatica 'Vaga::getVagas()' a variavel '$vagas'. Um atributo ou procedimento/função estatica pode ser chamada sem precisar instanciar a classe que ela está contida.
 
 
include(__DIR__ . '/include/header.php'); //Inclui um arquivo expecificado
include(__DIR__ . '/include/listagem.php');
include(__DIR__ . '/include/footer.php');
