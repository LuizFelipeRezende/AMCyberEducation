<?php

namespace AMCyber;

use AMCyber\Controllers\NotFoundController;
use AMCyber\Database;

class Application
{
    private $pdo;
    private $controller;

    private function setApp()
    {
        $this->pdo = (new Database())->getConnection();
     
        $loadname = 'AMCyber\Controllers\\';
        $url = $_GET['url'] ?? 'home';
        $loadname .= ucfirst(strtolower($url)) . "Controller";
        $this->controller = file_exists($loadname . '.php') ? (new $loadname()) : new NotFoundController();
    }

    public function run()
    {
        $this->setApp();
        $this->controller->index($this->pdo);
    }
}
