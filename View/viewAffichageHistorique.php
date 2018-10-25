
<h2>Voici l'historique des reservations vous concerant :<br> </h2>

<?php
foreach($hist as $value)
{ ?>
  <div class="container">
   <div class"row">
    <ul class="list-group">
      <li class="list-group-item">ID de la reservation : <?=$value['id_r']?></li>
      <li class="list-group-item">ID de la place : <?=$value['id_p']?></li>
      <li class="list-group-item">Nom de la place : <?=$value['num_p']?></li>
      <li class="list-group-item">Date de reservation : <?=$value['date_resa']?></li>
      <li class="list-group-item">Date de debut : <?=$value['date_debut']?></li>
      <li class="list-group-item">Date de fin : <?=$value['date_fin']?></li>
    </ul>
    </div>
    </div>
    <br>
<?php   }
echo '<br>';
?>