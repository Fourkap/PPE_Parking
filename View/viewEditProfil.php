<?php include ("includes/header.php"); ?>
<?php
$requete = $bdd->query("SELECT * FROM users WHERE id_u = '".$_SESSION['id_u']."'");
$nomprenom = $_SESSION['prenom']." ".$_SESSION['nom'];
$date = $_SESSION['date_inscription'];
$PhpDate = strtotime($date);
$FormattedPhpDate = date('d M, Y', $PhpDate );
$email = $_SESSION['email'];
$login = $_SESSION['login'];
$avatar = $_SESSION['avatar'];



?>
