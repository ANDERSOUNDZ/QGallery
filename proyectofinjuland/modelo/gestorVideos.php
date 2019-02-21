<?php

require_once "backend/modelo/conexion.php";

class VideosModelo{

	public function seleccionarVideosModelo($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla ORDER BY orden ASC");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();
	}

}