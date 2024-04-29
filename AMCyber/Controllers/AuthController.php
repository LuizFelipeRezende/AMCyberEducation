<?php

namespace AMCyber\Controllers;

use PDO;

class AuthController
{

    public function index(PDO $pdo)
    {
       
        $statement = $pdo->prepare("SELECT * FROM usuarios WHERE user_name = :user_name");
        $statement->execute([
            ":user_name" => $_POST["user"]
        ]);
        $user = $statement->fetch();
        

        if ($user) {
            $_SESSION["login"] = $user;
            $routeLogin = ROUTE . "home";
            header("Location: {$routeLogin}");
        } else {
            $routeLogin = ROUTE . "home";
            header("Location: {$routeLogin}");
            die;
        }
        

        // if (isset($_SESSION['login'])) {
        //     //Renderiza a home do user
        //     \AMCyber\Views\MainView::render('home');
        // } else {
        //     //Renderiza a pagina de login
        //     \AMCyber\Views\MainView::render('login', $pdo);
        // }
    }
}
