<?php

use Bramus\Router\Router;
use App\Controller\AuthController;
use App\Controller\StudentController;

return function(Router $router){
    $AuthController = new AuthController();
    $StudentController = new StudentController();

    $router->get('/', function(){
        echo "index";
    });

    $router->get('/student', [$StudentController, 'index']);
    
    $router->get('/login', [$AuthController , 'index']);
    $router->post('/login', [$AuthController , 'login']);
};
