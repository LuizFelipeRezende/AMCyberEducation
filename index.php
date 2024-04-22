<?php   
    
    session_start();

    require('vendor/autoload.php');
    define("PUBLIC_ASSETS_CSS", "http://localhost:8000/public/assets/css/");
    define("ROUTE", "http://localhost:8000?url=");

    (new AMCyber\Application())->run();
?>