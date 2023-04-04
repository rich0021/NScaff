<?php
namespace App\Controller;

class AuthController {
    public function index(){
        require_once 'app/Views/LoginViews.php';
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        var_dump($username, $password);
    }
}