<?php
    namespace AMCyber;
    class Application
    {
        private $controller;
        private function setApp(){

            $loadname = 'AMCyber\Controllers\\';
            $url = explode ('/', @$_GET['url']);

            if($url[0] == ''){
                $loadname.='Home';
            } else{
                $loadname.=ucfirst(strtolower($url[0]));
            }

            $loadname.='Controller';

            if(file_exists($loadname.'.php')){
                $this->controller = new $loadname();
            } else{
                include('Views/pages/404.php');
                die();
            }

        }

        public function run(){
            $this->setApp();
            $this->controller->index();
        } 
    }
?>