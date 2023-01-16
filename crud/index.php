<?php

require(__DIR__ . '/vendor/autoload.php');

use \App\Entity\Vaga;

$vagas = Vaga::getVagas();
 

include(__DIR__ . '/include/header.php');
include(__DIR__ . '/include/listagem.php');
include(__DIR__ . '/include/footer.php');
