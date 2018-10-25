<?php
  

 require("Model/modelAdmin.php");

/* 
if($_SESSION['niveau'] == 3)
   */ 
    if(3 == 3)
    { 
        $rs = afficheReservation();
        
        $nbm = affichePlaceTot();
        $plm = afficheLibre();
        $prm = afficheReserve();
        $pim = afficheIndisponible();
        
        $nb = afficheNombrePlaceTot();
        $pl = afficheNombreLibre();
        $pr = afficheNombreReserve();
        $pi = afficheNombreIndisponible();
        
        $us = afficheUserAll();  
        $uat = afficheUserAttente(); 
        $ua = afficheUserApprouve();   
        $uap= afficheUserAvecPlace();  
        $usp = afficheUserSansPlace(); 
        $ub = afficheUserBanni(); 
        $uf = afficheUserDansFile(); 
                        
    }
    else
    {
        header("location: index.php");
    }

    if(isset($_GET['iddelete']))
    {
        supprimeUser($_GET['iddelete']);
        header("location:".BASE_URL."/controllerAdmin");
    }

    if(isset($_GET['idban']))
    {
        bannitUser($_GET['idban']);
        header("location:".BASE_URL."/controllerAdmin");
    }

    if(isset($_POST['submit_ajout_place']))
    {
        $nb_tot = $_POST['nb_place_tot'];
        while($nb_tot > 0)
        {
            $nb_tot--;
            ajoutPlace();
            header("location:".BASE_URL."/controllerAdmin");
        }
    }

    if(isset($_POST['submit_set_active']))
    {
        $nb_act = $_POST['nb_place_act'];
        while($nb_act > 0)
        {
            $nb_tot--;
            ajoutPlace();
            header("location:".BASE_URL."/controllerAdmin");
        }
    }          
    if(isset($_POST['afficheUserResa']))
    {

        $ru = afficheUneReservationParUser($_POST['id_u']);
    }


    if(isset($_POST['affichePlaceResa']))
    {
        $rp = afficheUneReservationParPlace($_POST['id_p']); 
    }


    if(isset($_POST['search_user']))
    {
        $uu = rechercheUser($_POST['id_u']);
    }

// ajout de place dans la table 


if(isset($_POST['demande_ajout']))
{    
    $nb = afficheNombrePlaceTot();
    $pl = afficheNombreLibre();
    $pr = afficheNombreReserve();
    $pi = afficheNombreIndisponible();

    $npdem = $_POST['npdem'];
    if($npdem < $pr['nbPlaceReserve'])
    {
        echo "Ce nombre est inférieur au nombre de place réservées en ce moment !";
    }
    else
    {
        $nbPlaceActive = $pl['nbPlaceLibre'] + $pr['nbPlaceReserve'];
        $nbPlaceNecessaire = $npdem - $nb['nbPlaceTot'];
        $nbPlaceActiveNecessaire = $npdem - $nbPlaceActive;
        $nbPlaceInactive = $nb['nbPlaceTot'] - $nbPlaceActive;
        if($nbPlaceNecessaire > 0)
        {   
            indIntoDispo();
            while($nbPlaceNecessaire > 0)
            {
                ajoutPlace();
                $nbPlaceNecessaire--;
            }            
        }
        elseif($nbPlaceNecessaire < 0 && $nbPlaceActiveNecessaire < 0)
        {
        $nbPlaceTrop = $nbPlaceActiveNecessaire * -1;
        indIntoDispo();
        dispoIntoInd($nbPlaceTrop);
        }
        elseif($nbPlaceNecessaire < 0 && $nbPlaceActiveNecessaire > 0)
        {
        $nbPlaceInactiveNecessaire = $nbPlaceInactive - $nbPlaceActiveNecessaire;
        dispoIntoInd($nbPlaceInactiveNecessaire);
        }
    }
} 
    require("View/viewAdmin.php");

