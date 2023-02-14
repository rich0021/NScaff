<?php

namespace App\Config;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    private $capsule;

    function __construct() {
        $this->capsule = new Capsule();
    }

    public function conn(){
        $this->capsule->addConnection([
            "driver" => $_ENV["DB_CONNECTION"],
            "host" =>$_ENV["DB_HOST"],
            "database" => $_ENV["DB_DATABASE"],
            "username" => $_ENV["DB_USERNAME"],
            "password" => $_ENV["DB_PASSWORD"],
            "port" => $_ENV["DB_PORT"],
        ]);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }
}
