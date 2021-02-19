<div class="d-flex justify-content-center text-center">


<form class="p-5 bg-light" method="post">

	<div class="form-group">
		<label for="email">Correo Electronico:</label>
		<input type="email" class="form-control" placeholder="Enter email" id="email" name="ingresoemail">
	</div>


	<div class="form-group">
		<label for="pwd">Contraseña:</label>
		<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="ingresopassword">
	</div>


	<?php

	$ingreso = new ControladorFormularios();
	$ingreso -> ctrlIngreso();
	?>
	<button type="submit" class="btn btn-primary">Ingresar</button>
 
</form>
</div>