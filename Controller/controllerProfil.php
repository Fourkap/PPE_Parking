<?php
require "Model/modelProfil.php";
$nomprenom = $_SESSION['prenom']." ".$_SESSION['nom'];
$mail = $_SESSION['mail'];
require 'View/viewProfil.php';

 require("Model/modelReservation.php");
 require("Model/modelReservationAttente.php");
 require("Model/modelPlace.php");
 require("Model/modelAffichageHistorique.php");

    $nb = afficheNombrePlaceTot();
    $pl = afficheNombreLibre();
    $pr = afficheNombreReserve();
    $pi = afficheNombreIndisponible();


    $placeLibre = $pl['nbPlaceLibre'];
if(isset($_SESSION['connecte']))
{
    $id_u = $_SESSION['id_u'];
    $etat_u = $_SESSION['etat_u'];
}

if($etat_u = 1)
{
    $statu = 'pas en réservation';
}
if($etat_u = 2 || $etat_u = 4)
{
    $statu = 'en réservation';
}
if(isset($_POST['Reserver']) && $etat_u == 1)
{
    
    if($placeLibre > 0) //si il y a au moins une place disponible 
    {
        echo"oui<br>";
            $idPlaceHasard = placeHasard();
            entrerDateReservation($id_u);

            $dateNow = new Datetime('now');
            $ajout_temps = '2 hours';
            $date_fin = ajoutTemps($dateNow,$ajout_temps);
            $newDate = $date_fin->format('Y-m-d H:i:s');

            $id_r = retourneId_reservation($id_u);
            entrerDateDebutFinPlace($idPlaceHasard,$newDate,$id_r);

            setReserve($id_r);
            setAyantPlace($id_r); 
    }
    elseif($placeLibre <= 0) //si il n'y a pas de place disponible
    {
            $prochaine_place = prochainePlace();
        var_dump($prochaine_place);
        echo"<br>";
            $id_p = $prochaine_place['idProPlace'];
        var_dump($id_p);
        echo"<br>date début";
           $date_debut = $prochaine_place['dateFinProPlace'];
        var_dump($date_debut);
        echo"<br>";
        $date = new DateTime($date_debut);
        var_dump($date);
        echo"non<br>";
          entrerDateReservation($id_u);
        var_dump($id_u);
        echo"<br>";
           mettreAttente($id_u);  
        var_dump($id_u);
        echo"<br>"; 
            $ajout_temps = '2 hours';
        var_dump($ajout_temps);
        echo"<br>";
            $date_fin = ajoutTemps($date,$ajout_temps); 
        var_dump($date_fin);
        echo"<br>";  
            $newDate = $date_fin->format('Y-m-d H:i:s');
        var_dump($newDate);
        echo"<br>";

            $id_r = retourneId_reservation($id_u);
        var_dump($id_r);
        echo"<br>";
            entrerDateDebutFinPlaceAttente($id_p,$newDate,$date_debut,$id_r);
        var_dump($id_r);
        echo"<br>";
            setReserve2fois($id_p);     
        var_dump($id_p);
    }
    else
    {
        echo "La file d'attente est pleine, veuillez patientez !";
    }
}
elseif($etat_u != 1)
{
    echo "Vous avez déjà réservé une place !!";
}
    $hist = afficheUneReservationParUser($id_u);

 require("View/viewReserverPlace.php");
 require("View/viewAffichageHistorique.php");