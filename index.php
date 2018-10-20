<?php


session_start();
<<<<<<< HEAD
    require 'Model/connex_db.php';
=======

=======
>>>>>>> 15ec490419502e5f39508b1b89d1c7d181907cb2

define('WEBROOT', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');



    require 'Model/connex_db.php';



    if(!isset($_GET['p']) || $_GET['p'] == "")
  {
    $_GET["p"] = 'controller_accueil';
  }
  else
  {
    if(!file_exists("Controller/".$_GET['p'].".php"))
    {
      $_GET['p'] = 'controller_404';
    }
    else
    {
      $page = $_GET['p'];
    }
  }
    ob_start(); //arrete l'affichage
        require "Controller/".$_GET['p'].".php";
        $content = ob_get_contents();//recupere la page appelée
    ob_end_clean();//relance l'affichage
require "layout.php";
