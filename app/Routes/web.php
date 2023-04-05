<?php
namespace App\Routes;

use Bramus\Router\Router;
use App\Http\Controllers\ExampleController;

return function(Router $router){
    $router->get('/', [new ExampleController(), 'index']);
};
