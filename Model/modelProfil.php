<?php
$requete = $db->query("SELECT * FROM users WHERE id_u = '".$_SESSION['id_u']."'");
