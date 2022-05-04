<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="Diseño_registro.css">
		<script>
	history.pushState(null, null, document.URL);
	
window.addEventListener('popstate', function () {
	window.alert("hi");
    history.pushState(null, null, document.URL);
});
	</script>
    </head>
    <body>
        <div class="container right-panel-active">
        <div class="container__form container--signup">
		    <form action="Registro_logica.php" method="post" class="form" id="form1" >
			<h2 class="form__title">Registrar</h2>
			<input type="text" placeholder="Email" class="input" name="adres" required/>
			<input type="password" placeholder="Contraseña" class="input" name="contrasena" required/>
            <input type="text" placeholder="Nombre" class="input" name="name" required/>
			<input type="text" placeholder="Apellido" class="input" name="apel" required/>
            <input type="text" placeholder="Edad" class="input" name="age" required/>
			
			
			

			<button class="btn">Registrate</button>
		    </form>
	    </div>
        <div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
			<a class="btn" id="signIn" href="Index.php">Regresar</a>
			</div>
			<div class="overlay__panel overlay--right">
				
			</div>
		</div>
	</div>
        </div>
	
    </body>
</html>