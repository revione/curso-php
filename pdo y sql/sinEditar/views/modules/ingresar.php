<h1>INGRESAR</h1>

	<form method="post" action="">
		
		<input type="text" placeholder="Usuario" name="usuario" required>

		<input type="password" placeholder="Contraseña" name="password" required>

		<input type="submit" value="Enviar">

	</form>

	<?php

		$mvc = new MvcController();
		$mvc -> ingresoUsuarioController();

		if ( isset( $_GET["action"] ) ) {
			if ( $_GET["action"] === "fallo-ingreso" ) {
				echo "<p class='mensaje-error'>El Usuario o la contraseña no coinciden.</p>";
			}
		}

		exit();