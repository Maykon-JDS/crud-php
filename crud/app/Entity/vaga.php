<?php

namespace App\Entity; //Define um namespace

use App\Db\Database; //Chama um namespace para poder utilizar os elementos que persistem neste namespace
use \PDO; //Chama um namespace para poder utilizar os elementos que persistem neste namespace

class Vaga //Declaração da classe Vaga
{
    public $id; //declara um atributo publico
    public $titulo; //declara um atributo publico
    public $descicao; //declara um atributo publico
    public $ativo; //declara um atributo publico
    public $data; //declara um atributo publico

    public function cadastrar() //Metodo que cadastra no banco de dados
    {
        $this->data = date('Y-m-d H:i:s'); //Add o valor da data atual na variavel 'data' utilizando a função date()
        
        $obDatabase = new Database('vaga'); //Instancia um objeto do tipo Database passando o parametro 'vaga' que representa qual a tabela que se deseja conectar 
        $this->id = $obDatabase->insert([ 'titulo' => $this->titulo, 'descricao' => $this->descicao, 'ativo' => $this->ativo, 'data' => $this->data]); //Add o ID retoranado pela função inserte, que retorna o id da inserção feita por ultimo, a função recebe um array com indexação personalizada 

        return true; //Retorna true caso tudo de certo
    }

    public function atualizar()
    {
        return (new Database('vaga'))->update('id = '.$this->id,[
            'titulo' => $this->titulo,
            'descricao' => $this->descicao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);
    }

    public function excluir(){
        return (new Database('vaga'))->delete('id = '.$this->id);
    }

    public static function getVagas($where = null, $order = null, $limit = null){
        return (new Database('vaga'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getVaga($id){
        return (new Database('vaga'))->select('id = '.$id)->fetchObject(self::class);
    }
}

