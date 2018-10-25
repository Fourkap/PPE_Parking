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

if(isset($_SESSION['connecte']))
{
    $id_u = $_SESSION['id_u'];
}

if(isset($_POST['Reserver']) && $_SESSION['etat_u'] == 1)
{
    if($pl > 0) //si il y a au moins une place disponible 
    {
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
    elseif($pl <= 0) //si il n'y a pas de place disponible
    {
            entrerDateReservation($id_u);
            mettreAttente($id_u);        
            $prochaine_place = prochainePlace();
            $id_p = $prochaine_place['idProplace'];
            $date_debut = $prochaine_place['dateFinProPlace'];

            $ajout_temps = '2 hours';
            $date_fin = ajoutTemps($date_debut,$ajout_temps);   
            $newDate = $date_fin->format('Y-m-d H:i:s');

            $id_r = retourneId_reservation($id_u);
            entrerDateDebutFinPlaceAttente($id_p,$newDate,$date_debut,$id_r);
            setReserve2fois($id_p);        
    }
    else
    {
        echo "La file d'attente est pleine, veuillez patientez !";
    }
}
elseif($_SESSION['etat_u'] != 1)
{
    echo "Vous avez déjà réservé une place !!";
}
    $hist = afficheUneReservationParUser($id_u);

 require("View/viewReserverPlace.php");
 require("View/viewAffichageHistorique.php");