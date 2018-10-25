<?php
if(isset($_POST['submit_update']))
	{
		$requete = $db->query("UPDATE users SET

								mdp = '".sha1($_POST['mdp'])."',
								prenom = '".$_POST['prenom']."',
								nom = '".$_POST['nom']."',
								mail = '".$_POST['mail']."',
							  WHERE id_u = ".$_SESSION['id_u']);

		echo '<div class="alert alert-success">
  <strong>Vos informations ont été mis a jour, Veuillez vous reconectez pour que cela prenne effet</strong>
</div>';

}

$requete = $db->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
	$reponse = $requete->fetch();
