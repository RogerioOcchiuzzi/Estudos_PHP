<?php

namespace Crud\Controller;

class ErroController 
{
    public function index() 
    {
        if (file_exists(CONFIG_FILE)) { $cfg = include(CONFIG_FILE); }
        require APP . 'view/_inc/cabecalho.php';
        require APP . 'view/erro/index.php';
        require APP . 'view/_inc/rodape.php';
    }
}
