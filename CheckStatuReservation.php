<?php

 require("Model/modelFileAttente.php");

$datetableau = checkStatuResa();

foreach($datetableau as $key => $value)
    {
        $date_debut = $value['date_debut'];
        $date_fin = $value['date_fin'];
        $etat_p = $value['etat_p'];
        $etat_u = $value['etat_u'];
        $id_u = $value['id_u'];
        $id_p = $value['id_p'];
        $dateNow = new Datetime('now');
        
        if($etat_p == 4 && $etat_u == 2 && $dateNow > $date_fin)
        {
            place4to2($id_p);
            user2to1($id_u);
        }
        elseif($etat_p == 2 && $etat_u == 3 && $dateNow < $date_fin && $dateNow > $date_debut)
        {
            user3to2($id_u);
        }
        elseif($etat_p == 2 && $etat_u == 3 && $dateNow > $date_fin)
        {
            place2to1($id_p);
            user2to1($id_u);
        }
        elseif($etat_p == 2 && $etat_u == 2 && $dateNow > $date_fin)
        {
            var_dump($id_p);
            place2to1($id_p);
            user2to1($id_u);
        }
    }