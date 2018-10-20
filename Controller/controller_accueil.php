<?php

  require "Model/model_accueil.php";


    if(isset($_SESSION['connecte']))
    {
        $id_u = $_SESSION['id'];
        $reponse = getId($id_u);
    }
require "View/view_accueil.php";
