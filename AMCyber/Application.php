<?php

namespace AMCyber;

use AMCyber\Controllers\NotFoundController;

class Application
{
    private $controller;
    private function setApp()
    {
        $loadname = 'AMCyber\Controllers\\';
        $url = $_GET['url'] ?? 'home';
        $loadname .= ucfirst(strtolower($url)) . "Controller";
        $this->controller = file_exists($loadname . '.php') ? (new $loadname()) : new NotFoundController();
    }

    public function run()
    {
        $this->setApp();
        $this->controller->index();
    }
}
