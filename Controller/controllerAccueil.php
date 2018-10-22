<?php

  require "Model/modelAccueil.php";


    if(isset($_SESSION['connecte']))
    {
        $id_u = $_SESSION['id'];
        $reponse = getId($id_u);
    }
require "View/viewAccueil.php";
