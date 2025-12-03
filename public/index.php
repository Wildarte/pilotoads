<?php
// public/index.php

declare(strict_types=1);

// Exibe erros em ambiente de desenvolvimento
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Autoload do Composer
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Controller;

// Lê a URL enviada pelo .htaccess, ex: /home/index/123
$url = $_GET['url'] ?? '';
$url = trim($url, '/');
$segments = $url !== '' ? explode('/', $url) : [];

// Define controller e método padrão
$controllerName = $segments[0] ?? 'home';
$methodName     = $segments[1] ?? 'index';

// Monta o nome da classe, ex: App\Controllers\HomeController
$controllerClass = 'App\\Controllers\\' . ucfirst($controllerName) . 'Controller';

// Parâmetros da URL (se houver)
$params = array_slice($segments, 2);

// Verifica se o controller existe
if (!class_exists($controllerClass)) {
    http_response_code(404);
    echo "Controller '{$controllerName}' não encontrado.";
    exit;
}

// Instancia o controller
$controller = new $controllerClass;

// Verifica se o método existe
if (!method_exists($controller, $methodName)) {
    http_response_code(404);
    echo "Método '{$methodName}' não encontrado em {$controllerClass}.";
    exit;
}

// Chama a ação com os parâmetros
call_user_func_array([$controller, $methodName], $params);
