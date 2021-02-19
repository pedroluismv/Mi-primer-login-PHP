<div class="d-flex justify-content-center text-center">


<form class="p-5 bg-light" method="post">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" placeholder="Enter your name" id="nombre" name="registronombre">
	</div>

	<div class="form-group">
		<label for="email">Correo Electronico:</label>
		<input type="email" class="form-control" placeholder="Enter email" id="email" name="registroemail">
	</div>


	<div class="form-group">
		<label for="pwd">Contraseña:</label>
		<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="registropassword">
	</div>


	<?php

	$registro = ControladorFormularios :: ctrlregistro();
	 if ($registro == "ok") {
	 	

	 	echo '<script>
	 		if (window.history.replaceState){
	 		window.history.replaceState( null, null, window.location.href);}
	 		</script>';
	 	echo '<div class="alert alert-success"> Registro satisfactoriamente</div>';	 }


	?>

	<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>