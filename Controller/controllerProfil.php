<?php
require "Model/modelProfil.php";
$nomprenom = $_SESSION['prenom']." ".$_SESSION['nom'];
$mail = $_SESSION['mail'];
require 'View/viewProfil.php';
