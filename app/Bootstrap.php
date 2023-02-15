<?php
use App\Config\Database;
use Dotenv\Dotenv;
use Bramus\Router\Router;

//create dotenv object or make .env file readable
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

//create database instance
$db = new Database();
$db->conn(); 

// Create Router instance
$router = new Router();

(require 'Config/Middlewares.php')($router);

(require 'Config/Routes.php')($router);

// run the router
$router->run();