<?php

	if(isset($_POST['submit_login']))
	{
		$mail = $_POST['mail'];
		$mdp = sha1($_POST['mdp']);

		$requete = $db->query("SELECT * FROM users WHERE mail = '".$mail."'
								AND mdp = '".$mdp."'");

		if($reponse = $requete->fetch())
		{
			$_SESSION["connecte"]= true;
			$_SESSION["niveau"]= $reponse["niveau"];
			$_SESSION['id_u'] = $reponse['id_u'];
			$_SESSION['prenom'] = $reponse['prenom'];
			$_SESSION['nom'] = $reponse['nom'];
			$_SESSION['mail'] = $reponse['mail'];
			$_SESSION['etat_u'] = $reponse['etat_u'];

			header ("location:index.php");

		}
		else
		{
			echo '<div class="alert alert-danger">
  <strong>Mauvais identifiant et mot de passe</strong>
</div>';
		}
	}
?>
 