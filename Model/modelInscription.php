<?php

if(isset($_POST['submit_inscription']))
{


$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mdp = sha1($_POST['mdp']);
$mdp2 = sha1($_POST['mdp2']);

if (!empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND ($mdp == $mdp2))

{

$requete = $db->query("INSERT INTO users(mdp,mail,nom,prenom) VALUES('$mdp','$mail','$nom','$prenom')");

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
