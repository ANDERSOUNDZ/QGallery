<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="vista/images/icono.jpg">

	<link rel="stylesheet" href="vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="vista/css/font-awesome.min.css">
	<link rel="stylesheet" href="vista/css/style.min.css">
	<link rel="stylesheet" href="vista/css/fonts.min.css">
	<link rel="stylesheet" href="vista/css/cssFancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="vista/css/sweetalert.css">
	<link rel="stylesheet" href="vista/css/style.css">
	<link rel="stylesheet" href="vista/css/uikit.min.css" />


	<script src="vista/js/jquery-2.2.0.min.js"></script>
	<script src="vista/js/bootstrap.min.js"></script>
	<script src="vista/js/jquery.fancybox.js"></script>
	<script src="vista/js/animatescroll.js"></script>
	<script src="vista/js/jquery.scrollUp.js"></script>
	<script src="vista/js/sweetalert.min.js"></script>
	<script src="vista/js/uikit.min.js"></script>
	<script src="vista/js/uikit-icons.min.js"></script>

</head>

<body>

	<div class="container-fluid">

		<!--=====================================
		navbar
		======================================-->
		
		<?php include "modules/menu.php"; ?>
		
		<!--====  Fin de navbar  ====-->	
		
	</div>

	<div class="container-fluid">

		<!--=====================================
		SLIDE
		======================================-->
		
		<?php include "modules/slide.php"; ?>

		<!--====  Fin de SLIDE  ====-->

	</div>

	<div class="container">

		<!--=====================================
		TOP
		======================================-->

		<?php include "modules/top.php"; ?>
		
		<!--====  Fin de TOP  ====-->

		<!--=====================================
		GALERIA
		======================================-->

		<?php include "modules/galeria.php"; ?>

		<!--====  Fin de GALERIA  ====-->

		<!--=====================================
		ARTÍCULOS
		======================================-->

		<?php include "modules/articulos.php"; ?>

		<!--====  Fin de ARTÍCULOS  ====-->

		<!--=====================================
		VIDEOS
		======================================-->

		<?php include "modules/videos.php"; ?>

		<!--====  Fin de VIDEOS  ====-->

		<!--=====================================
			CONTÁCTENOS         
		======================================-->

		<?php include "modules/contactenos.php"; ?>
		
		<!--====  Fin de CONTÁCTENOS ====-->

		<!--=====================================
			ARTÍCULO MODAL         
		======================================-->

		<?php include "modules/articuloModal.php"; ?>	

    	<!--====  Fin de ARTICULO MODAL ====-->

	</div>

	
	




<script src="vista/js/script.min.js"></script>

</body>
</html>


