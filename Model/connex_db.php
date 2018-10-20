<?php

    require'variables-environnement.php';

    echo $db ;
    echo $user ;
    echo $password ;

    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=parking;charset=utf8","root","");
    }
    catch(Exception $e)
    {
        die("Base de données non trouvée");
    } 

