<?php   
    
    session_start();
    require('vendor/autoload.php');
    
    define('INCLUDE_PATH_STATIC','http://localhost/projetotcc/AMCyber/Views/pages/');
    
    $app = new AMCyber\Application();
    
    $app->run();
?>