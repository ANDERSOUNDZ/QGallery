<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BackEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="vista/images/icono.jpg">

	<link rel="stylesheet" href="vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="vista/css/font-awesome.min.css">
	<link rel="stylesheet" href="vista/css/style.css">
	<link rel="stylesheet" href="vista/css/fonts.css">
    <link rel="stylesheet" href="vista/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="vista/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="vista/css/jquery-ui.min.css">
	<link rel="stylesheet" href="vista/css/sweetalert.css">
	<link rel="stylesheet" href="vista/css/cssFancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="css/shards.min.css">

	<script src="vista/js/jquery-2.2.0.min.js"></script>
	<script src="vista/js/bootstrap.min.js"></script>
	<script src="vista/js/jquery.fancybox.js"></script>
	<script src="vista/js/jquery.dataTables.min.js"></script>
	<script src="vista/js/dataTables.bootstrap.min.js"></script>
	<script src="vista/js/dataTables.responsive.min.js"></script>
	<script src="vista/js/responsive.bootstrap.min.js"></script>
	<script src="vista/js/jquery-ui.min.js"></script>
	<script src="vista/js/sweetalert.min.js"></script>


</head>

<body>

	<div class="container-fluid">

		<section class="row">

		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->	
			
		<?php

			$modulos = new Enlaces();
			$modulos -> enlacesController();
		
		?>

		<!--====  Fin de COLUMNA CONTENIDO  ====-->

		</section>
	
	</div>

	<script src="vista/js/script.js"></script>
	<script src="vista/js/validarIngreso.js"></script>
	<script src="vista/js/gestorSlide.js"></script>
	<script src="vista/js/gestorArticulos.js"></script>
	<script src="vista/js/gestorGaleria.js"></script>
	<script src="vista/js/gestorVideos.js"></script>
	<script src="vista/js/gestorMensajes.js"></script>
	<script src="vista/js/gestorPerfiles.js"></script>
	<script src="vista/js/shards.min.js"></script>

	
</body>

</html>