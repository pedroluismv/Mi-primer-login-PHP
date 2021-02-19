<?php 
if (isset($_GET["id"])) {
	$item = "id";
	$valor =$_GET["id"];
	$usuario= ControladorFormularios::ctrlSeleccionarRegistros($item, $valor);
}


 ?>




<div class="d-flex justify-content-center text-center">


<form class="p-5 bg-light" method="post">
	<div class="form-group">
		
		<input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Enter your name" id="nombre" name="actualizarnombre">
	</div>

	<div class="form-group">
		
		<input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" placeholder="Enter email" id="email" name="actualizaremail">
	</div>


	<div class="form-group">
	
		<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="actualizarpassword">
	</div>

	<input type="hidden" name="passwordactual" value="<?php echo $usuario["password"]; ?>">
	<input type="hidden" name="idusuario" value="<?php echo $usuario["id"]; ?>">

<?php 
$actualizar= new ControladorFormularios();
$actualizar -> ctrActualizarRegistro();
 ?>
	
	<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>