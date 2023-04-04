<?php

use Bramus\Router\Router;
use App\Controller\ExampleController;
use App\Model\Example;

return function(Router $router){
    $router->get('/', [ExampleController::class, 'index']);
};
