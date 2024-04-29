<?php

namespace AMCyber;

use Exception;
use PDO;

class Database
{
    private $pdo;

    function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo '<h1>erro ao conectar</h1>';
        }
    }



    function getConnection()
    {
        return $this->pdo;
    }
}
