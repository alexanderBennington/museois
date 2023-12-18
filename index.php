<?php
    require_once "Controlador/RutasC.php";
    require_once "Modelo/RutasM.php";
    require_once "Controlador/AnunciosC.php";
    require_once "Modelo/AnunciosM.php";
    require_once "Controlador/ZonasC.php";
    require_once "Modelo/ZonasM.php";
    require_once "Controlador/VisitasC.php";
    require_once "Modelo/VisitasM.php";
    $rutas = new RutasControlador();
    $rutas -> PlantillaPublico();
?>