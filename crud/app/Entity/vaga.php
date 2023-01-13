<?php

namespace App\Entity;

use App\Db\Database;

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
        
        $obDatabase = new Database();
        $this->id = $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descicao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);
    }
}

