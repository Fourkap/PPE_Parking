<?php

        echo "Il y a ".$placeLibre." places libres actuellement.<br>";
        echo "Vous êtes actuellement ".$statu.".";

?>
   

   <div class="container">
    <div class"row justify-content-center">
        <div class="col-6">
           <a href="<?=BASE_URL;?>/controllerProfil">REFRESH</a>
            <form action="#" method="post">
                <input class="btn btn-primary btn-lg" type="submit" value="Reserver une place maintenant !" name="Reserver">
            </form>
        </div>
    </div>
</div>