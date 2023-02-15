<?php

use Bramus\Router\Router;

return function(Router $router){
    //must authenticate middleware
    $router->before('GET|POST', '/student', function(){
        if (!isset($_SESSION['user'])) {
            header('location: /login');
            exit();
        }
    });

    //must guest middleware
    $router->before('GET|POST', '/login', function(){
        if (isset($_SESSION['user'])) {
            header('location: /student');
            exit();
        }
    });
};
