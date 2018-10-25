<div class="container">
	<div class="py-5 text-center">

		<h2>Editer Mon profil</h2>

	</div>

	<div class="row">

		<div class="col-md-12">

			<form method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
				<div class="row">

					<div class="col-md-12 mb-12">
						<label for="prenom"><br>Prénom</label>
						<input type="text" class="form-control" id="fn" value="<?= $reponse['prenom']; ?>" name="prenom" placeholder="" required>

					</div>


					<div class="col-md-12 mb-12">
						<label for="nom"><br>Nom</label>
						<input type="text" class="form-control" id="Ln" value="<?= $reponse['nom']; ?>" name="nom" placeholder="" required>

					</div>


					<div class="col-md-12 mb-12">
						<label for="mdp"><br>Mot de passe</label>
						<input type="password" class="form-control" id="lastName" placeholder="Mot de passe" value="" name="mdp" required>



					<div class="col-md-12 mb-12">
						<label for="email"><br>email</label>
						<input type="text" class="form-control" id="lastName" value="<?= $reponse['mail']; ?>" name="mail" placeholder="" required>

					</div>

				</div>



				<hr class="mb-12">
				<button class="btn btn-primary btn-lg btn-block bouton-inscription" type="submit" name="submit_update">Mettre a jour mes informations</button>
			</form>
		</div>
	</div>


</div>
