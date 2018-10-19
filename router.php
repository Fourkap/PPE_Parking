<?php

echo 'test router';

$url = '';

if(isset($_GET['url'])) {
    $url = $_GET['url'];
    } 

if($url == '') {
    echo "page d'accueil";
        require 'controller/controller_connexion.php';
    }
elseif(preg_match('##', $url, $params)) {
        
    } 
else { 
    require 'page404.php';
    }