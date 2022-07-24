<?php

    require_once("model/model.php");

    class controller extends model
    {
        public function __construct()
        {
            parent:: __construct();
            
            // echo "hello";
            
            $st=$this->selectalldata('state');

            $ct=$this->selectalldata('city');

            if(isset($_SERVER["PATH_INFO"]))
            {
                switch($_SERVER["PATH_INFO"])
                {
                    case '/':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("content.php");
                        require_once("footer.php");
                        require_once("register.php"); 
                        break;

                        case '/Contact-us':

                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("contact.php");
                        require_once("footer.php");
                        break;

                    default:
                        require_once("index.php");
                        require_once("header.php");
                        require_once("404.php");
                        break;
                }
            }
        }
    }

    $obj = new controller;

?>