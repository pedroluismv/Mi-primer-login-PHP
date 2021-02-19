<?php 

class ControladorFormularios{


/**...............................
 Registros
 .................................*/
	static public function ctrlregistro(){

		if (isset($_POST["registronombre"])) {

			$tabla = "registros";
			$datos = array("nombre"=> $_POST["registronombre"], 
							"email"=> $_POST["registroemail"],
							"password"=> $_POST["registropassword"]);
			
			$respuesta = ModeloFormularios :: mdlregistro($tabla, $datos);
			return $respuesta;

			}
	}

/**...............................
 Seleccionar Registros
 .................................*/

static public function ctrlSeleccionarRegistros($item, $valor){
	$tabla= "registros";
	$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
	return $respuesta;

}


/**...............................
 Ingreso
 .................................*/

public function ctrlIngreso(){

if (isset($_POST["ingresoemail"])) {
$tabla ="registros";
$item = "email";
$valor = $_POST["ingresoemail"];
	
	$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

	if ($respuesta["email"] == $_POST["ingresoemail"] && $respuesta["password"] == $_POST["ingresopassword"]) {
		

		$_SESSION["validaringreso"] ="ok";

		echo '<script>
	 		if (window.history.replaceState){
	 		window.history.replaceState( null, null, window.location.href);}
	 		window.location = "index.php?pagina=inicio";
	 		</script>';


	}else{
		echo '<script>
	 		if (window.history.replaceState){
	 		window.history.replaceState( null, null, window.location.href);}
	 		</script>';
	 	echo '<div class="alert alert-danger">El usuario no existe</div>';	 }

	}
	

}

/**...............................
 Actualizar Datos
 .................................*/


 public function ctrActualizarRegistro(){

 	if (isset($_POST["actualizarnombre"])) {

 		if ($_POST["actualizarpassword"]!= "") {
 			$password = $_POST["actualizarpassword"];
 		}else{
 			$password= $_POST["passwordactual"];
 		}


 		$tabla = "registros";
 		$datos = array("id" => $_POST["idusuario"], "nombre"=> $_POST["actualizarnombre"], 
 			"email"=> $_POST["actualizaremail"],
 			"password"=> $password);

 		$respuesta = ModeloFormularios :: mdlActualizarRegistro($tabla, $datos);
 		
 		if ($respuesta =="ok") {
 			echo '<script>
 			if (window.history.replaceState){
 				window.history.replaceState( null, null, window.location.href);}
 				</script>';
 				echo '<div class="alert alert-success"> Datos Actualizados Satisfactoriamente</div>	 
 				<script>
 				setTimeout(function(){
 					window.location = "index.php?pagina=inicio";},3000)

 					if (window.history.replaceState){
 						window.history.replaceState( null, null, window.location.href);}
 						</script>';

 					}


}

}

/**...............................
 Eliminar Datos
 .................................*/


public function ctrlEliminarRegistro(){

	if (isset($_POST["eliminarRegistro"])) {
		

	$tabla = "registros";
	$valor = $_POST["eliminarRegistro"];
	$respuesta = ModeloFormularios :: mdlEliminarRegistro($tabla, $valor);
 			
	if ($respuesta =="ok") {
 			echo '<script>
 			if (window.history.replaceState){
 				window.history.replaceState( null, null, window.location.href);}

 				window.location = "index.php?pagina=inicio";
 				</script>';

	}

}
		
}
}

 ?>