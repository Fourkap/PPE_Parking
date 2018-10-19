<?php

if(isset($_POST['submit']))
{


$login = $_POST['login'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$mdp = sha1($_POST['mdp']);
$mdp2 = sha1($_POST['mdp2']);

if (!empty($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['prenom']) AND !empty($_POST['nom'] AND !empty($_POST['adresse']) AND ($mdp == $mdp2)))
{

$requete = $bdd->query("INSERT INTO users(login,mdp,email,adresse,nom,prenom,date_inscription) VALUES('$login','$mdp','$email','$adresse','$nom','$prenom', CURDATE())");
header ("location:index.php");
}


else
{

	echo '<div class="alert alert-danger">
  <strong>les deux mots de passe ne correspondent pas</strong>
</div>';
}
}
else
{
	 '<div class="alert alert-danger">
  <strong>Veuillez remplir tous les champs</strong>
</div>';
}

?>
