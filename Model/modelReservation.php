<?php

function placeHasard() //retourne une place disponible au hasard
{
    global $db;
    
    $requete = $db->prepare("SELECT id_p FROM place WHERE etat_p = 1 ORDER BY RAND ( ) LIMIT 1");
    $requete->execute();
    $tableau = $requete->fetch(); 
    $idPlaceHasard = $tableau['id_p'];
    return $idPlaceHasard;
 }  // Fonctionnement de placeHasard() :  $idPlaceHasard = placeHasard();
 
function entrerDateReservation($id_u) // entre une date_resa et une id_u en fonction de celle qu'on a entré
{
    global $db;
    $requete = $db->prepare("INSERT INTO reservation(id_u, date_resa) VALUES ('.$id_u.', NOW())");
    $requete->execute();
    return $requete->fetchAll();
}

function retourneId_reservation($id_u)
{
    global $db;
    $requete = $db->prepare("SELECT id_r FROM reservation WHERE id_u = ".$id_u." AND date_debut IS NULL");
    $requete->execute();
    $tableau = $requete->fetch();
    $id_r = $tableau['id_r'];
    return $id_r;
}

function ajoutTemps($date,$temps_ajoute) 
{
    date_add($date, date_interval_create_from_date_string($temps_ajoute));
    return $date;
} /* Fonctionnement de ajoutTemps() :

    $dateNow = new Datetime('now');

    $ajout_temps = '2 hours'; 

    $datePlus = ajoutTemps($dateNow,$ajout_temps);
*/

function entrerDateDebutFinPlace($idPlaceHasard,$date_fin,$id_r) // dans le cas ou il y a une place disponible
{
    global $db;
    $requete = $db->prepare("UPDATE reservation SET date_debut = NOW(), date_fin = '".$date_fin."', id_p = ".$idPlaceHasard." WHERE id_r = ".$id_r);
    $requete->execute();
    return $requete->fetch();
}

function setReserve($id_r)
{
    global $db;
    $requete = $db->prepare("UPDATE place p, reservation r SET p.etat_p = 2 WHERE p.id_p = r.id_p AND r.id_r =".$id_r);
    $requete->execute();
    return $requete->fetch();
}

function setAyantPlace($id_r)
{
    global $db;
    $requete = $db->prepare("UPDATE users u, reservation r SET u.etat_u = 2 WHERE u.id_u = r.id_u AND r.id_r =".$id_r);
    $requete->execute();
    return $requete->fetch();
}