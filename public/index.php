<?php
require_once __DIR__ . '/../app/controllers/UserController.php';

$uri = $_SERVER['REQUEST_URI'];

// Remove a pasta base "/mvp-bootstrap/public" da URL
$basePath = '/mvp-bootstrap/public';
$route = str_replace($basePath, '', $uri);

$controller = new UserController();

// Roteamento
switch ($route) {
    case '/':
        $controller->login();
        break;

    case '/login':
        $controller->login();
        break;

    case '/auth':
        $controller->authenticate();
        break;

    case '/register':
        $controller->register();
        break;

    case '/store':
        $controller->store();
        break;

    case '/profile':
        $controller->profile();
        break;

    case '/logout':
        $controller->logout();
        break;

    default:
        http_response_code(404);
        echo "404 - Page not found.";
        break;
}
