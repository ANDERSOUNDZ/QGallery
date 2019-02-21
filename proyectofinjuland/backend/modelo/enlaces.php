<?php

class EnlacesModelo{

	public function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "ingreso" ||
		   $enlaces == "slide" ||
		   $enlaces == "articulos" ||
		   $enlaces == "galeria" ||
		   $enlaces == "videos" ||
		   $enlaces == "suscriptores" ||
		   $enlaces == "mensajes" ||
		   $enlaces == "perfil" ||
		   $enlaces == "salir"){

			$module = "vista/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "vista/modules/ingreso.php";
		}

		else{
			$module = "vista/modules/ingreso.php";		
		}

		return $module;

	}


}