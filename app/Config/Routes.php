<?php

use Bramus\Router\Router;
use App\Controller\Student;

return function(Router $router){
    $router->get('/', [Student::class, 'index']);
};
