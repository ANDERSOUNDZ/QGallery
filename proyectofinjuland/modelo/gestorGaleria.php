<?php

require_once "backend/modelo/conexion.php";

class GaleriaModelo{

	public function seleccionarGaleriaModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla ORDER BY orden ASC");
	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}
}