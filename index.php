<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto pracial 2</title>
        <link rel="stylesheet" href="Diseno.css">
    </head>
    <body>
    <div class="container right-panel-active">

	<!-- Sign In -->
	<div class="container__form container--signup">
		<form action="Validacion.php" class="form" id="form2" method="POST">
			<h2 class="form__title">Ingresar</h2>
			<input type="text" placeholder="Email" class="input" name="usuario" />
			<input type="password" placeholder="Password" class="input" name="contrasena"/>
			
			<button class="btn">Ingresar</button>
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<a class="btn" id="signIn" href="Registro.php">Registrate</a>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">Ingresar</button>
			</div>
		</div>
	</div>
</div>
    </body>
</html>