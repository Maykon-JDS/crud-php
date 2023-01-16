<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Vaga
{
    public $id;
    public $titulo;
    public $descicao;

    public $ativo;

    public $data;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');
        
        $obDatabase = new Database('vaga');
        $this->id = $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descicao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);

        return true;
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

