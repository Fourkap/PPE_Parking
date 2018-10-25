<?php

    function afficheNombrePlaceTot() //retourne users approuvés
    {
        global $db;
        $requete = $db->prepare("SELECT count(*) AS nbPlaceTot FROM place WHERE id_p");
        $requete->execute();
        return $requete->fetch();
    }

    function affichePlaceTot() //
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM place WHERE id_p");
        $requete->execute();
        return $requete->fetchAll();
    }
    
    function numeroterPlace($ajout_num,$id_p)
    {
        global $db;
        $requete = $db->prepare("UPDATE place SET num_p = ".$ajout_num." WHERE id_p = ".$id_p);
        $requete->execute();
        return $requete->fetch();
    }
    
    function indisponiblePlaceAll() //rend places indisponible
    {
        global $db;
        $requete = $db->prepare("UPDATE place SET etat_p = 3");
        $requete->execute();
        return $requete->fetch();
    }

    function disponiblePlace() //rend places disponible
    {
        global $db;
        $requete = $db->prepare("UPDATE place SET etat_p = 1");
        $requete->execute();
        return $requete->fetch();
    }

    function afficheNombreLibre() //retourne places libre
    {
        global $db;
        $requete = $db->prepare("SELECT count(*) AS nbPlaceLibre FROM place WHERE etat_p = 1");
        $requete->execute();
        return $requete->fetch();
    }

    function afficheLibre() //retourne places libre
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM place WHERE etat_p = 1");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheNombreReserve() //retourne places reservées
    {
        global $db;
        $requete = $db->prepare("SELECT count(*) AS nbPlaceReserve FROM place WHERE etat_p = 2 OR etat_p = 4");
        $requete->execute();
        return $requete->fetch();
    }
 
    function afficheReserve() //retourne places reservées
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM place WHERE etat_p = 2 OR etat_p = 4");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheNombreIndisponible() //retourne places reservées
    {
        global $db;
        $requete = $db->prepare("SELECT count(*) AS nbPlaceIndis FROM place WHERE etat_p = 3");
        $requete->execute();
        return $requete->fetch();
    }

    function afficheIndisponible() //retourne places reservées
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM place WHERE etat_p = 3");
        $requete->execute();
        return $requete->fetchAll();
    }       

    function indIntoDispo()
    {
        global $db;
        $requete = $db->prepare("UPDATE place SET etat_p = 1 WHERE etat_p = 3");
        $requete->execute();
        return $requete->fetch();
    }      

    function dispoIntoInd($nbPlaceTrop)
    {
        global $db;
        $requete = $db->prepare("UPDATE place SET etat_p = 3 WHERE etat_p = 1 LIMIT ".$nbPlaceTrop);
        $requete->execute();
        return $requete->fetch();
    }