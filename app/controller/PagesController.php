<?php

namespace app\controller;
use app\core\Controller;


class PagesController extends Controller {

    public function __construct()
    {
        // echo "Construtor \"Teste Controller\" teste";
    }

    public function home()
    {
        $this->load('home/main');
    }

    // public function produto()
    // {
    //     $this->load('produto/main');
    // }

    public function quemSomos()
    {
        $this->load('quem-somos/main');
    }

    public function contato()
    {
        $this->load('contato/main');
    }

    
}