<?php

function afficheUneReservationParUser($id_u)
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM reservation r, place p, users u WHERE r.id_u = u.id_u AND r.id_p = p.id_p AND r.id_u = ".$id_u);
        $requete->execute();
        return $requete->fetchAll();
    }

function affichagePositionFileAttente($date_resa,$id_u)
{
     global $db;
        $requete = $db->prepare("SELECT COUNT(date_resa) AS rang FROM reservation r, users u WHERE u.id_u = ".$id_u." AND u.etat_u = 1 AND date_resa <= ".$date_resa);
        $requete->execute();
        return $requete->fetchAll();
}