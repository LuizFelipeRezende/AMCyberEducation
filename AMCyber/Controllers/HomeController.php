<?php

namespace AMCyber\Controllers;

use PDO;

class HomeController
{

    public function index(PDO $pdo)
    {
        
        if (isset($_SESSION['login'])) {
            //Renderiza a home do user
            \AMCyber\Views\MainView::render('home');
        } else {
            //Renderiza a pagina de login
            \AMCyber\Views\MainView::render('login', $pdo);
        }
    }
}
