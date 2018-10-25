
<?= " <br>   vu admin   ";?>
<a href="<?=BASE_URL;?>/controllerAdmin">REFRESH</a>
    
<h1>Espace d'édition du parking : </h1> <br>
     <h2>Nombre de places total :  <?php echo $nb['nbPlaceTot']; ?> </h2><br>
      <h2>Affichage places : <br></h2>
<?php

echo $nb['nbPlaceTot']."<br>";
echo $pl['nbPlaceLibre']."<br>";        
echo $pr['nbPlaceReserve']."<br>";        
echo $pi['nbPlaceIndis']."<br>"; 

    //formulaire d'affichage des places

if(!isset($_POST['InputaffichePlace'])) {
    echo "Choisir une option pour afficher la liste des places selon ce critère"; }?> 
<form action="" method="post">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="places">
  <label class="form-check-label" for="inlineCheckbox1">Toutes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="places">
  <label class="form-check-label" for="inlineCheckbox2">Disponibles</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" name="places">
  <label class="form-check-label" for="inlineCheckbox3">Réservées</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox4" value="option4" name="places">
  <label class="form-check-label" for="inlineCheckbox4">Inactives</label>
</div>
<input class="btn btn-primary" type="submit" value="Valider" name="InputaffichePlace">
         </form>
<?php

if(isset($_POST['InputaffichePlace']))
    {
    ?> <h2>Affichage de la liste des places demandées : </h2> <?php
        $option = $_POST['places'];
    switch ($option) {
        case 'option1':
            foreach($nbm as $key => $value)
    {
        echo "id place : ".$value['id_p']." num place : ".$value['num_p']." etat place : ".$value['etat_p']."<br>";
    }
            break;
        case 'option2':
            foreach($plm as $key => $value)
    {
        echo "id place : ".$value['id_p']." num place : ".$value['num_p']." etat place : ".$value['etat_p']."<br>";
    }
            break;
        case 'option3':
            foreach($prm as $key => $value)
    {
        echo "id place : ".$value['id_p']." num place : ".$value['num_p']." etat place : ".$value['etat_p']."<br>";
    }
            break;
        case 'option4':
            foreach($pim as $key => $value)
    {
        echo "id place : ".$value['id_p']." num place : ".$value['num_p']." etat place : ".$value['etat_p']."<br>";
    }
            break;
            
        }
    }?>
<br>
<form action="" method="post" class="text-middle">
                <label >Nombre de place à ajouter : </label>
                <input type="text" name="npdem">
                <input type="submit" name="demande_ajout">
            </form>

<h1>Espace d'édition des utilisateurs : </h1> <br>

  
      <h2>Affichage utilisateurs : <br></h2>
      
      <?php 


if(!isset($_POST['InputafficheUser'])) {
    echo "Choisir une option pour afficher la liste des utilisateurs selon ce critère"; }?> 
    
<form action="" method="post">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox5" value="option5" name="users">
  <label class="form-check-label" for="inlineCheckbox5">Tous</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox6" value="option6" name="users">
  <label class="form-check-label" for="inlineCheckbox6">En attente</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox7" value="option7" name="users">
  <label class="form-check-label" for="inlineCheckbox7">Approuvés</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox8" value="option8" name="users">
  <label class="form-check-label" for="inlineCheckbox8">Ayant une place</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox9" value="option9" name="users">
  <label class="form-check-label" for="inlineCheckbox9">Dans la file d'attente</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox10" value="option10" name="users">
  <label class="form-check-label" for="inlineCheckbox10">Bannis</label>
</div>
<input class="btn btn-primary" type="submit" value="Valider" name="InputafficheUser">
         </form>
<?php

if(isset($_POST['InputafficheUser']))
    {
    ?> <h1>Affichage de la liste des utilisateurs demandés : </h1> <?php
        $option = $_POST['users'];
    switch ($option) {
        case 'option5':
            foreach($us as $key => $value)
    {
        echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&iddelete=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
    }
            break;
        case 'option6':
            foreach($uat as $key => $value)
    {
        echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&iddelete=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
    }
            break;
        case 'option7':
            foreach($ua as $key => $value)
    {
        echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&iddelete=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
    }
            break;
        case 'option8':
            foreach($uap as $key => $value)
    {
        echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&iddelete=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
    }
            break;
        case 'option9':
            foreach($uf as $key => $value)
    {
        echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&iddelete=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
    }
        case 'option10':
            foreach($ub as $key => $value)
    {
        echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&id=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
    }
            
        }
    }?>
      
<form action="" method="post" class="text-middle">
                <label >Id de l'utilisateur recherché : </label>
                <input type="text" name="id_u">
                <input type="submit" name="search_user">
            </form>      
<?php
if(isset($_POST['search_user'])){
foreach($uu as $key => $value)
        {
            echo "nom : ".$value['nom']." prénom : ".$value['prenom']."
            <a href='index.php?p=controllerAdmin&iddelete=".$value['id_u']."'>Supprimer</a> <a href='index.php?p=controllerAdmin&idban=".$value['id_u']."'>Bannir</a><br>";
        } 
} ?>
      
<h1>Espace d'édition des réservations : </h1> <br>
<h2>Affichage reservations : <br></h2>
   
     <?php


if(!isset($_POST['InputafficheResa'])) {
    echo "Choisir une option pour afficher la liste des réservations selon ce critère"; }?> 
 
<form action="" method="post">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox11" value="option11" name="resa">
  <label class="form-check-label" for="inlineCheckbox11">Réservations en cours</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox12" value="option12" name="resa">
  <label class="form-check-label" for="inlineCheckbox12">Réservations terminées</label>
</div>
<input class="btn btn-primary" type="submit" value="Valider" name="InputafficheResa">
         </form>
<?php

if(isset($_POST['InputafficheResa']))
    {
    ?> <h1>Affichage de la liste des utilisateurs demandés : </h1> <?php
        $option = $_POST['resa'];
    switch ($option) {
        case 'option11':
            
    foreach($rs as $key => $value)
    {
        echo" id resa : ".$value['id_r']." num place : ".$value['num_p']." id place : ".$value['id_p']." prenom user : ".$value['prenom']." date resa ".$value['date_resa']." date début : ".$value['date_debut']." date fin ".$value['date_fin']." <br>";
    }
        case 'option12':
            
    foreach($rs as $key => $value)
    {
        echo" id resa : ".$value['id_r']." num place : ".$value['num_p']." id place : ".$value['id_p']." prenom user : ".$value['prenom']." date resa ".$value['date_resa']." date début : ".$value['date_debut']." date fin ".$value['date_fin']." <br>";
    }
            
        }
    }?>
<form action="" method="post" class="text-middle">
                <label >Recherche de réservation par id d'utilisateur :</label>
                <input type="text" name="id_u">
                <input type="submit" name="afficheUserResa">
            </form>
            <?php
if(isset($_POST['afficheUserResa'])){
foreach($ru as $key => $value)
        {
            echo" id resa : ".$value['id_r']." num place : ".$value['num_p']." id place : ".$value['id_p']." prenom user : ".$value['prenom']." date resa ".$value['date_resa']." date début : ".$value['date_debut']." date fin ".$value['date_fin']." <br>";
        }
}
?>
<form action="" method="post" class="text-middle">
                <label >Recherche de réservation par id de place :</label>
                <input type="text" name="id_p">
                <input type="submit" name="affichePlaceResa">
            </form>       
<?php
if(isset($_POST['affichePlaceResa'])){
foreach($rp as $key => $value)
        {
            echo" id resa : ".$value['id_r']." num place : ".$value['num_p']." id place : ".$value['id_p']." prenom user : ".$value['prenom']." date resa ".$value['date_resa']." date début : ".$value['date_debut']." date fin ".$value['date_fin']." <br>";
        } 
} 