<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}

include "vista/modules/botonera.php";
include "vista/modules/navbar.php";

?>
<!--=====================================
VIDEOS ADMINISTRABLE          
======================================-->

<div id="videos" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<form method="post" enctype="multipart/form-data">

	<input type="file" id="subirVideo" name="video" class="btn btn-default" required>

</form>

<p>Subir sólo videos en formato MP4 y que no exceda el peso de 50 MB</p>

<ul id="galeriaVideo">

	<?php

		$video = new GestorVideos();
		$video -> mostrarVideoVistaController();

	?>
	
</ul>


	<button id="ordenarVideo" class="btn btn-warning" style="margin:10px 30px;">Ordenar Videos</button>

	<button id="guardarVideo" class="btn btn-primary" style="margin:10px 30px; display:none">Guardar Orden Videos</button>


</div>


<!--====  Fin de VIDEOS ADMINISTRABLE  ====-->

<!-- <li>
		<span class="fa fa-times"></span>
		<video controls>
			<source src="vista/videos/video01.mp4" type="video/mp4">
			</video>	
	</li>

	<li>
		<span class="fa fa-times"></span>
		<video controls>
			<source src="vista/videos/video02.mp4" type="video/mp4">
			</video>	
	</li>

	<li>
		<span class="fa fa-times"></span>
		<video controls>
			<source src="vista/videos/video03.mp4" type="video/mp4">
			</video>	
	</li>

	<li>
		<span class="fa fa-times"></span>
		<video controls>
			<source src="vista/videos/video04.mp4" type="video/mp4">
			</video>	
	</li>
 -->