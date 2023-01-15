<?php

require(__DIR__ . '/vendor/autoload.php');

use \App\Entity\Vaga;

$vagas = Vaga::getVagas();
echo '<pre>'; print_r($vagas); echo '</pre>'; exit;
 

include(__DIR__ . '/include/header.php');
include(__DIR__ . '/include/listagem.php');
include(__DIR__ . '/include/footer.php');
