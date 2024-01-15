<?php
// Define rotas
$routes = [
    '/' => 'home',
    '/?page=home' => 'home',
    '/?page=pedidos' => 'pedidos',
    '/?page=carrinho' => 'carrinho',
    '/?page=produto' => 'produto',
];

// Verifica se a rota existe
if (array_key_exists($path, $routes)) {
    // Se existir pegar o caminho que for iqual a rota
    $page = $routes[$path];
} else {
    // Página não encontrada
    $page = '404';
}

