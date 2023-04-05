<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExampleController extends Controller{
    public function index(){
        return $this->view("index.html", ['name' => 'nopal']);
    }
}