<?php

	if(isset($_POST['submit']))
	{
		$login = $_POST['login'];
		$mdp = sha1($_POST['mdp']);

		$requete = $db->query("SELECT * FROM users WHERE login = '".$login."'
								AND mdp = '".$mdp."'");

		if($reponse = $requete->fetch())
		{
			$_SESSION["connecte"]= true;
			$_SESSION["lvl"]= $reponse["lvl"];
			$_SESSION['id_u'] = $reponse['id_u'];
			$_SESSION['prenom'] = $reponse['prenom'];
			$_SESSION['nom'] = $reponse['nom'];
			$_SESSION['email'] = $reponse['email'];
			$_SESSION['date_inscription'] = $reponse['date_inscription'];
			$_SESSION['login'] = $reponse['login'];
			$_SESSION['avatar'] = $reponse['avatar'];

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
