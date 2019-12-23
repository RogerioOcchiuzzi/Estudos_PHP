<?php

namespace Crud\Controller;

class HomeController 
{
    public function index() 
    {
        if (file_exists(CONFIG_FILE)) { $cfg = include(CONFIG_FILE); }
        require APP . 'view/_inc/cabecalho.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_inc/rodape.php';
    }
}
