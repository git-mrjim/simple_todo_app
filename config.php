<?php

require 'vendor/autoload.php';

// Setup to get the env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Congiguration for the database connection
$config = [
    'host' => $_ENV['DB_HOST'],
    'dbname' => $_ENV['DB_NAME']
];

return $config;