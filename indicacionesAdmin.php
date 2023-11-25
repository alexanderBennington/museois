<?php
    require_once "Controlador/RutasC.php";
    require_once "Modelo/RutasM.php";
    require_once "Controlador/EmpleadosC.php";
    require_once "Modelo/EmpleadosM.php";
    require_once "Controlador/AnunciosC.php";
    require_once "Modelo/AnunciosM.php";
    require_once "Controlador/AdministradoresC.php";
    require_once "Modelo/AdministradoresM.php";
    $rutas = new RutasControlador();
    $rutas -> Plantilla();
?>