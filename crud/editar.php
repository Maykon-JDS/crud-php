<?php

require(__DIR__ . '/vendor/autoload.php');

define('TITLE','Editar vaga');

use \App\Entity\Vaga;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$obVaga = Vaga::getVaga($_GET['id']);

if(!$obVaga instanceof Vaga){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descicao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->atualizar();

    header('location: index.php?status=success');
    exit;
}

include(__DIR__ . '/include/header.php');
include(__DIR__ . '/include/formulario.php');
include(__DIR__ . '/include/footer.php');
