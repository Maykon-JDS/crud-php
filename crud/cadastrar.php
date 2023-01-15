<?php

require(__DIR__ . '/vendor/autoload.php');

use \App\Entity\Vaga;

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $obVaga = new Vaga;
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descicao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include(__DIR__ . '/include/header.php');
include(__DIR__ . '/include/formulario.php');
include(__DIR__ . '/include/footer.php');
