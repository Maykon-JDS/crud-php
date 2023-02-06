<?php //Página responsavel por unir o header.php - formulario.php - footer.php para montar a página cadastrar onde se os dádos do formulário forem passados corretamente passará no if e executara um cadastro no banco com os dados que foram passados no formulario.php

require(__DIR__ . '/vendor/autoload.php');

define('TITLE','Cadastrar vaga'); // Cria uma contante que será usada dentro do aquivo formulario.php

use \App\Entity\Vaga; //Utilizado para chamar uma determinada namespace
$obVaga = new Vaga; //Intancia uma classe do tipo Vaga.

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){ // Verifica se os valores foram setados, se sim passa na avaliação e executa os comandos internos.
    $obVaga->titulo = $_POST['titulo']; //Adiciona o valor do parametro 'titulo' na instancia da classe 
    $obVaga->descicao = $_POST['descricao']; //Adiciona o valor do parametro 'descricao' na instancia da classe 
    $obVaga->ativo = $_POST['ativo']; //Adiciona o valor do parametro 'ativo' na instancia da classe 
    $obVaga->cadastrar(); //Chama o metodo cadastrar

    header('location: index.php?status=success');
    exit;
}

include(__DIR__ . '/include/header.php');
include(__DIR__ . '/include/formulario.php');
include(__DIR__ . '/include/footer.php');
