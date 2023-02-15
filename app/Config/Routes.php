<?php

use Bramus\Router\Router;
use App\Controller\AuthController;
use App\Controller\StudentController;

return function(Router $router){
    $router->get('/', function(){
        echo "index";
    });
    $router->get('/student', [new StudentController(), 'index']);
    $router->get('/login', [new AuthController(), 'index']);
};
