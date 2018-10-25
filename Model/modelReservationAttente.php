<?php

    function mettreAttente($id_u) // dans le cas ou il n'y a pas une place disponible
    {
        global $db;
        $requete = $db->prepare("UPDATE users SET etat_u = 3 WHERE id_u =".$id_u);
        $requete->execute();
        return $requete->fetch();
    }

    function prochainePlace() // fonction qui retourne des information sur la reservation la plus ancienne
    {
        global $db;

        $requete = $db->prepare("SELECT r.id_p, MIN(r.date_resa), r.date_debut, r.date_fin FROM place p, reservation r WHERE p.etat_p = 2 GROUP BY id_p");
        $requete->execute();
        $tableau = $requete->fetchAll();
        $idProchainePlace = $tableau['0']['id_p'];
        $dateResaProchainePlace = $tableau['0']['MIN(r.date_resa)'];
        $dateFinProchainePlace = $tableau['0']['date_fin'];
        $array = [
        "idProPlace" => "$idProchainePlace",
        "dateResaProPlace" => "$dateResaProchainePlace",
        "dateFinProPlace" => "$dateFinProchainePlace", ];
        return $array;
    }   /*  Comportement de prochainePlace() :

    $array = prochainePlace();  
    
    $array['idProPlace'];   pour designer l'id de la place qui nous sera attitrer en sorti de file d'attente
    
    $array['dateResaProPlace'];   pour savoir qui designer en fonction de l'ancienneté de la reservation

    $array['dateFinProPlace'];   pour savoir quand on sortira de la file d'attente
    
    */

    function entrerDateDebutFinPlaceAttente($idPlaceHasard,$date_debut,$date_fin,$id_r) // dans le cas ou il y a une place disponible
    {
        global $db;
        $requete = $db->prepare("UPDATE reservation SET date_debut = '".$date_debut."', date_fin = '".$date_fin."', id_p = ".$idPlaceHasard." WHERE id_r = ".$id_r);
        $requete->execute();
        return $requete->fetch();
    }

    function setReserve2fois($id_p) // fonction qui empeche une place d'être reservée plus de deux fois
    {
        global $db;
        $requete = $db->prepare("UPDATE place SET etat_p = 4 WHERE id_p =".$id_p);
        $requete->execute();
        return $requete->fetch();    
    }