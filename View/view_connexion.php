

<body class="bg-light">

	<div class="container">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="images/Apple_logo_black.png" alt="" width="72" height="72">
			<h2>Connexion</h2>

		</div>

		<div class="row">

			<div class="col-md-12">

				<form method="post" class="needs-validation" novalidate>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">Login</label>
							<input type="text" class="form-control" id="firstName" placeholder="Login" value="" name="login" required>
							<div class="invalid-feedback">
								Un Login est requis
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Mot de passe</label>
							<input type="password" class="form-control" id="lastName" placeholder="Mot de passe" value="" name="mdp" required>
							<div class="invalid-feedback">
								Un mot de passe est requis
							</div>
						</div>
					</div>



					<hr class="mb-12">
					<button class="btn btn-primary btn-lg btn-block bouton-inscription" type="submit" name="submit">Se connecter</button>
				</form>
			</div>
		</div>


	</div>




	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')

	</script>
	<script src="../../../../assets/js/vendor/popper.min.js"></script>
	<script src="../../../../dist/js/bootstrap.min.js"></script>
	<script src="../../../../assets/js/vendor/holder.min.js"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';

			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');

				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();

	</script>
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
