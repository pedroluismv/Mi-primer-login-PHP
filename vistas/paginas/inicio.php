<?php 

if (isset($_SESSION["validaringreso"])) {
	if ($_SESSION["validaringreso"] != "ok") {
		
			echo '<script>
	 		window.location = "index.php?pagina=ingreso";
	 		</script>';
			return;
	}
}else{
		echo '<script>
	 	window.location = "index.php?pagina=ingreso";
	 	</script>';
		return;

}

$usuarios = ControladorFormularios::ctrlSeleccionarRegistros(null, null);


 ?>



<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Fecha</th>
				<th>Acciones</th>
			</tr>
		</thead>
		

		<tbody>

		<?php foreach ($usuarios as $key => $value): ?>

		<tr>
				<td><?php echo $value["nombre"]; ?></td>
				<td><?php echo $value["email"]; ?></td>
				<td><?php echo $value["fecha"]; ?></td>
				<td>
				<div class="btn-group">
					<a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class=" btn btn-warning">Editar</a>
					
					<form method="post">
						<input type="hidden" value="<?php echo $value["id"]?>;" name = "eliminarRegistro">

					<button type="submit" class="btn btn-danger">Eliminar</button>	

					<?php 
					$eliminar = new ControladorFormularios();
					$eliminar -> ctrlEliminarRegistro();

					?>
					</form>

				</div>
				</td>
			</tr>
			
			
		<?php endforeach ?>

		</tbody>
	</table>