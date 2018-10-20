<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Parking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        if(isset($_SESSION['connecte']))
        {
          ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">

            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASE_URL;?>/">Mon Compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASE_URL;?>/controller_logout">Se Deconnecter</a>
            </li>

            <?php
              if($_SESSION['niveau'] == 3)
              {
              ?>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASE_URL;?>/">Gestion Admin</a>
            </li>
            <?php
          }
        }
        else {
          ?>
          <li class="nav-item">
            <?php require "Controller/controller_inscription.php;"?>
          </li>
          <li class="nav-item">
            <?php require "Controller/controller_connexion.php;"?>
          </li>
        <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
