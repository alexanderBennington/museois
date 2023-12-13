<?php
    require_once "Controlador/RutasC.php";
    require_once "Modelo/RutasM.php";
    require_once "Controlador/EmpleadosC.php";
    require_once "Modelo/EmpleadosM.php";
    require_once "Controlador/AnunciosC.php";
    require_once "Modelo/AnunciosM.php";
    require_once "Controlador/AdministradoresC.php";
    require_once "Modelo/AdministradoresM.php";
    require_once "Controlador/ZonasC.php";
    require_once "Modelo/ZonasM.php";
    require_once "Controlador/ColeccionC.php";
    require_once "Modelo/ColeccionM.php";
    require_once "Controlador/VisitasC.php";
    require_once "Modelo/VisitasM.php";
    require_once "Controlador/SolicitudC.php";
    require_once "Modelo/SolicitudM.php";
    require_once "Controlador/ReporteC.php";
    require_once "Modelo/ReporteM.php";
    $rutas = new RutasControlador();
    $rutas -> Plantilla();
?>