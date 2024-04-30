<?php

namespace AMCyber\Views;

class MainView
{
    public static function render($filename, $pdo = null)
    {
        include('pages/' . $filename . '.php');
    }
}
