<?php

require_once "modelo/enlaces.php";
require_once "modelo/ingreso.php";
require_once "modelo/gestorSlide.php";
require_once "modelo/gestorArticulos.php";
require_once "modelo/gestorGaleria.php";
require_once "modelo/gestorVideos.php";
require_once "modelo/gestorMensajes.php";
require_once "modelo/gestorSuscriptores.php";
require_once "modelo/gestorPerfiles.php";

require_once "controlador/plantilla.php";
require_once "controlador/enlaces.php";
require_once "controlador/ingreso.php";
require_once "controlador/gestorSlide.php";
require_once "controlador/gestorArticulos.php";
require_once "controlador/gestorGaleria.php";
require_once "controlador/gestorVideos.php";
require_once "controlador/gestorMensajes.php";
require_once "controlador/gestorSuscriptores.php";
require_once "controlador/gestorPerfiles.php";

$plantilla = new PlantillaControlador();
$plantilla -> plantilla();