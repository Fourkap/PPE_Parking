<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php" style=font-size:30px;">Parking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul>
          <?php
                        if(isset($_SESSION['connecte']))
                        {
                        ?>
                                <a href="<?=BASE_URL;?>/userController"><li class="col-xs-2 col-md-2 liste"><button type="button" class="bouton"> Mon compte</button></li></a>
                                <a href="<?=BASE_URL;?>/logout"><li class="col-xs-2 col-md-2 liste"> <button type="button" class="bouton">Déconnexion</button></li></a>
                        <?php
                            if($_SESSION['lvl'] == 3)
                            {
                        ?>
                                <a href="<?=BASE_URL;?>/adminController"><li class="col-xs-2 col-md-2 liste"><button type="button" class="bouton"> Gestion Admin</button></li></a> ""
                        <?php
                            }
                        }
                        else { ?>
                                <li class="nav-link">
                              <?php require "Controller/controller_connexion.php"; ?>
                              </li>
                                <li class="nav-link">
                                  <?php require "Controller/controller_inscription.php"; ?>
                                </li>
                             <?php } ?>


          </ul>
        </div>
      </div>
    </nav>
