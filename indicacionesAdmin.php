<?php
    require_once "Controlador/RutasC.php";
    require_once "Modelo/RutasM.php";
    require_once "Controlador/EmpleadosC.php";
    require_once "Modelo/EmpleadosM.php";
    $rutas = new RutasControlador();
    $rutas -> Plantilla();
?>