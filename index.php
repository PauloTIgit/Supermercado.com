<?php


// Obtém o caminho da URL
$path = $_SERVER['REQUEST_URI'];

//Retirar dominio do site para pegar so a rota
$path = str_replace('supermercado.com/', '', $path);

// incluir rotas
include './routes/web.php';

// Definir local das telas
$view = './view/'.$page.'.php';

//Adcionando header de configurção pardão para todas as paginas
include './view/model/header.php';

// Inclui o arquivo da página correspondente
include $view;

//Adcionando footer de configurção pardão para todas as paginas
include './view/model/footer.php';