<?php

namespace app\model;

use app\core\Model;

class ProdutoModel{

    private $pdo;

    public function __construct()
    {
        $this->pdo = new Model();
    }

    public function insert(object $params)
    {
        $sql = 'INSERT INTO produto(nome, imagem, descricao) VALUES(:nome, :imagem, :descricao)';

        $params = [
            ':nome'         => $params->nome,
            ':imagem'       => $params->imagem,
            ':descricao'    => $params->descricao
        ];

        if(!$this->pdo->executeNonQuery($sql, $params))
            return -1; // código de erro

        return $this->pdo->getLastID();
    }

    public function update(object $params)
    {
        $sql = 'UPDATE produto SET nome=:nome, imagem=:imagem, descricao=:descricao WHERE id=:id';

        $params = [
            ':id'           => $params->id,
            ':nome'         => $params->nome,
            ':imagem'       => $params->imagem,
            ':descricao'    => $params->descricao
        ];

        return $this->pdo->executeNonQuery($sql, $params);

    }

    public function getAll()
    {
        $sql = 'SELECT id, nome, imagem, descricao FROM produto ORDER BY nome ASC';

        $dt = $this->pdo->executeQuery($sql);

        $listaProduto = null;

        foreach($dt as $dr)
            $listaProduto[] = $this->collection($dr);

        return $listaProduto;
    }

    public function getById(int $id)
    {
        $sql = 'SELECT id, nome, imagem, descricao FROM produto WHERE id = :id';

        $param = [
            ':id' => $id
        ];

        $dr = $this->pdo->executeQueryOneRow($sql, $param);

        return $this->collection($dr);
    }   

    private function collection($param)
    {
        return (object)[
            'id'=>$param['id'] ?? null,
            'nome'=>$param['nome'] ?? null,
            'imagem'=>$param['imagem'] ?? null,
            'descricao'=>$param['descricao'] ?? null
        ];
    }
}