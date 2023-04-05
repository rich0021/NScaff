<?php
require "vendor/autoload.php";

use Dotenv\Dotenv;
use App\Config\Database;
use Bramus\Router\Router;

//create dotenv object or make .env file readable
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

//create database instance
$db = new Database();
$db->conn(); 

// Create Router instance
$router = new Router();

//call middleware
(require 'Http/Middleware/Middlewares.php')($router);

//call web route
(require 'Routes/web.php')($router);

//call api route
(require 'Routes/api.php')($router);

// run the router
$router->run();