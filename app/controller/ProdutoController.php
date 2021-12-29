<?php

namespace app\controller;

use app\core\Controller;
use app\model\ProdutoModel;
use app\classes\Input;

class ProdutoController extends Controller
{

    private $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function index()
    {
        $this->load('produto/main');
    }

    public function novo()
    {
        $this->load('produto/novo');
    }

    public function insert()
    {
        $produto = $this->getInput();
        
        if(!$this->validate($produto, false)){
            return $this->showMessage('Formulário Inválido', 'Os dados fornecidos são inválidos!', BASE.'novo-produto', 422);
        }

        $result = $this->produtoModel->insert($produto);

        if($result <= 0){
            echo 'Erro ao cadastrar um novo produto';
            die();
        }

        redirect(BASE.'editar-produto/'. $result);
    }

    public function pesquisar()
    {
        $param = Input::get('pes');

        $this->load('produto/pesquisa', [
            'termo'=>$param
        ]);
    }

    private function getInput(){
        return(object)[
            'id'=>Input::get('id', FILTER_SANITIZE_NUMBER_INT),
            'nome'=>Input::post('txtNome'),
            'imagem'=>Input::post('txtImagem'),
            'descricao'=>Input::post('txtDescricao')
        ];
    }

    private function validate(Object $produto, bool $validateId = true)
    {
        if($validateId && $produto->id < 0)
            return false;
        
        if(strlen($produto->nome) < 3)
            return false;
        
        if(strlen($produto->imagem) < 5)
            return false;
        
        if(strlen($produto->descricao) < 3)
            return false;
     
        return true;
    }
}