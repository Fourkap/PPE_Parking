<?php

<<<<<<< HEAD
    
    require_once('variables-environnement.php');

    function dbConnect()

        {
            try
            {
                $db = new PDO("mysql:host=localhost;dbname=$db;charset=utf8","$user","$password");
                return $db;
            }
            catch(Exception $e)
            {
            die("Base de données non trouvée");
            }

        }
=======
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

>>>>>>> 319e684309154843aa143afd2c44bb77bf717839
