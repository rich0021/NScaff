<?php
namespace App\Http\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller{
    protected $twig;

    public function __construct(){
        $this->twig = new Environment(new FilesystemLoader('app/Views'));
    }

    protected function view($path, $DataArray = []){
        echo $this->twig->render($path,  $DataArray);
    }
}