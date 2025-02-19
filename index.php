<?php

// Routing for the application
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/simple_todo_app/' => 'controllers/index.php',
    '/simple_todo_app/signup' => 'controllers/index.php',
    '/simple_todo_app/add' => 'controllers/add.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo 'Page not found';
}






