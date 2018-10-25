
<h2>Voici l'historique des reservations vous concerant :<br> </h2>

<?php
foreach($hist as $value)
{
    echo "ID de la reservation ".$value['id_r']."<br>";
    echo "ID de la place ".$value['id_p']."<br>";
    echo "Date de reservation : ".$value['date_resa']."<br>";
    echo "Date de debut : ".$value['date_debut']."<br>";
    echo "Date de fin : ".$value['date_fin']."<br>";
    echo "Date de reservation : ".$value['date_resa']."<br>";
    echo"<br>";
}
echo '<br>';