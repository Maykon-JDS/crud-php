<?php

require(__DIR__ . '/vendor/autoload.php');

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    die('Cadastrar');
}

include(__DIR__ . '/include/header.php');
include(__DIR__ . '/include/formulario.php');
include(__DIR__ . '/include/footer.php');
