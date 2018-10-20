<?php

    require'variables-environnement.php';

    echo $db ;
    echo $user ;
    echo $password ;

            try
            {
                $db = new PDO("mysql:host=localhost;dbname=$db;charset=utf8","$user","$password");
                return $db;
            }
            catch(Exception $e)
            {
            die("Base de données non trouvée");
            }
