<?php 
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title> Document</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="js/jquery-3.5.1.min.js">
</head>
<body>

	<div class="container-fluid">
		<h1 class="text-center py-3">LOGO</h1>
	</div>

	<div class="container-fluid">
		
		<div class="container"></div>
			<ul class="nav nav-justified py-2 nav-pills">



			<?php if (isset($_GET["pagina"])): ?>
				<?php if ($_GET["pagina"] == "registro"): ?>

					<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registrarse</a>
					</li>	
				<?php else: ?>
					<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">Registrarse</a>
					</li>
				<?php endif ?>
				
				<?php if ($_GET["pagina"] == "ingreso"): ?>

					<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
					</li>
	
				<?php else: ?>

					<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>

				<?php endif ?>
				

				<?php if ($_GET["pagina"] == "inicio"): ?>

					<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
					</li>
	
				<?php else: ?>

					<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
					</li>

				<?php endif ?>


				<?php if ($_GET["pagina"] == "Salir"): ?>

					<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=salir">Salir</a>
					</li>
	
				<?php else: ?>
					<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
					</li>
				<?php endif ?>

			<?php else: ?>
				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registrarse</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
				</li>

			<?php endif ?>
				
				
			</ul>
		
	</div>


<div class="container-fluid">
	<div class="container">
 
		<?php

		if ( isset($_GET["pagina"])) {

			if ($_GET["pagina"]== "ingreso" ||
				$_GET["pagina"]== "registro" ||
				$_GET["pagina"]== "inicio" ||
				$_GET["pagina"]== "editar" ||
				$_GET["pagina"]== "salir") {
				
				include "paginas/".$_GET["pagina"].".php";
			}
			else {
				include "paginas/error404.php";
			}


			
		}else{

			include "paginas/registro.php";
		}


		?>




	</div>
</div>

</body>
</html>