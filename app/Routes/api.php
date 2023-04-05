<?php

use Bramus\Router\Router;

return function(Router $router){
    $router->mount('/api', function() use ($router) {
        $router->get('/', function() {
            echo 'api index';
        });
    });
};


