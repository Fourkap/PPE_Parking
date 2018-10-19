<?php

    echo "connexion bdd est là";
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