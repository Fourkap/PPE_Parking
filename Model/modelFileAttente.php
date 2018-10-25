<?php

    
    function place2to1($id_p) //rend la place libre
{
    global $db;
    $requete = $db->prepare("UPDATE place SET etat_p = 1 WHERE id_p = ".$id_p." AND etat_p = 2");
    $requete->execute();
    return $requete->fetch();
} 
    
    function place4to2($id_p) 
{
    global $db;
    $requete = $db->prepare("UPDATE place SET etat_p = 2 WHERE id_p = ".$id_p." AND etat_p = 4");
    $requete->execute();
    return $requete->fetch();
} 
 
    function user2to1($id_u)
{
    global $db;
    $requete = $db->prepare("UPDATE users SET etat_u = 1 WHERE id_u = ".$id_u." AND etat_u = 2");
    $requete->execute();
    return $requete->fetch();
}

    function user3to2($id_u)
{
    global $db;
    $requete = $db->prepare("UPDATE users SET etat_u = 2 WHERE id_u = ".$id_u." AND etat_u = 3");
    $requete->execute();
    return $requete->fetch();
}

    function user3to1($id_u)
{
    global $db;
    $requete = $db->prepare("UPDATE users SET etat_u = 1 WHERE id_u = ".$id_u." AND etat_u = 3");
    $requete->execute();
    return $requete->fetch();
}

    function checkStatuResa()
{
    global $db;    
    $requete = $db->prepare("SELECT r.date_resa, r.date_debut, r.date_fin, r.id_u, r.id_p, p.id_p, p.etat_p, u.id_u, u.etat_u FROM reservation r, place p, users u WHERE u.id_u = r.id_u AND p.id_p = r.id_p");
    $requete->execute();
    return $requete->fetchAll();   
}
