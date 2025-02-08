<?php
require 'vendor/autoload.php';
require 'database.php';

// Setup to get the env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Congiguration for the database connection
$config = [
    'host' => $_ENV['DB_HOST'],
    'dbname' => $_ENV['DB_NAME']
];
$database = new Database($config);

// Routing for the application
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
var_dump($uri);

$routes = [
    '/simple_todo_app/' => 'controllers/index.php',
    '/simple_todo_app/signup' => 'controllers/index.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo 'Page not found';
}






