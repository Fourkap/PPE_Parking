<?php
 
    function afficheUserAll() //retour ne tous les users or admin
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE niveau < 3");
        $requete->execute();
        return $requete->fetchAll();
    }

    function rechercheUser($id_u) //retourne users approuvés
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE id_u = ".$id_u);
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUserApprouve() //retourne users approuvés
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE niveau = 2");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUserAttente() //retourne users en attente d'approbation
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE niveau = 1");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUserBanni() //retourne users bannis
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE niveau = 0");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUserSansPlace() //retourne users bannis
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE etat_u = 1");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUserAvecPlace() //retourne users bannis
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users WHERE etat_u = 2");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUserDansFile() //retourne users bannis
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM users u, reservation r WHERE r.id_u = u.id_u AND date_debut IS NULL");
        $requete->execute();
        return $requete->fetchAll();
    }

    function supprimeUser($id_u) //supprimer un user avec id_u
    {
        global $db;
        $requete = $db->prepare("DELETE FROM users WHERE id_u =".$id_u);
        $requete->execute();
        return $requete->fetch();
    }

    function bannitUser($id_u) //bannit un user avec id_u
    {
        global $db;
        $requete = $db->prepare("UPDATE users SET niveau = 0 WHERE id_u =".$id_u);
        $requete->execute();
        return $requete->fetch();
    }
        
    function ajoutPlace() //ajout place avec $num_p_tot
    {
        global $db;
        $requete = $db->prepare("INSERT INTO place(num_p) VALUES ('nouvelle place')");
        $requete->execute();
        return $requete->fetch();
    }

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
        $requete = $db->prepare("SELECT count(*) AS nbPlaceReserve FROM place WHERE etat_p = 2");
        $requete->execute();
        return $requete->fetch();
    }

    function afficheReserve() //retourne places reservées
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM place WHERE etat_p = 2");
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

    function afficheReservation() //retourne reservations
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM reservation r, place p, users u WHERE r.id_u = u.id_u AND r.id_p = p.id_p");
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUneReservationParUser($id_u)
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM reservation r, place p, users u WHERE r.id_u = u.id_u AND r.id_p = p.id_p AND r.id_u = ".$id_u);
        $requete->execute();
        return $requete->fetchAll();
    }

    function afficheUneReservationParPlace($id_p)
    {
        global $db;
        $requete = $db->prepare("SELECT * FROM reservation r, place p, users u WHERE r.id_u = u.id_u AND r.id_p = p.id_p AND r.id_u = ".$id_p);
        $requete->execute();
        return $requete->fetchAll();
    }