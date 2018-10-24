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

                                <a href="<?=BASE_URL;?>/controllerProfil"><button type="button" class="btn btn-primary">mon profil</button></a>
                                <a href="<?=BASE_URL;?>/controllerLogout"><button type="button" class="btn btn-danger">Déconnexion</button></a>

                        <?php
                            if($_SESSION['niveau'] == 3)
                            {
                        ?>
                                <a href="<?=BASE_URL;?>/adminController"><button type="button" class="btn btn-primary"> Gestion Admin</button></a> ""
                        <?php
                            }
                        }
                        else { ?>

                                  <a href="<?=BASE_URL;?>/controllerConnexion"><button type="button" class="btn btn-primary">Se connecter</button></a>



                                    <a href="<?=BASE_URL;?>/controllerInscription"><button type="button" class="btn btn-primary">Inscription</button></a>


                             <?php } ?>


          </ul>
        </div>
      </div>
    </nav>
