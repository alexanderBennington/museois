<?php
    class RutasControlador{
        public function Plantilla(){
            include "Vista/plantillaAdmin.php";
        }

        public function Rutas(){
            if(isset($_GET["ruta"])){
                $rutas = $_GET["ruta"];
            }else{
                $rutas = "indicacionesAdmin";
            }
            $respuesta = Modelo::RutasModelo($rutas);

            include $respuesta;
        }

        public function PlantillaPublico(){
            include "Vista/plantillaPublico.php";
        }

        public function RutasPublico(){
            if(isset($_GET["ruta"])){
                $rutas = $_GET["ruta"];
            }else{
                $rutas = "index";
            }
            $respuesta = Modelo::RutasModeloPublico($rutas);

            include $respuesta;
        }
        
        public function PlantillaEmpleado(){
            include "Vista/plantilla.php";
        }

        public function RutasEmpleado(){
            if(isset($_GET["ruta"])){
                $rutas = $_GET["ruta"];
            }else{
                $rutas = "index";
            }
            $respuesta = Modelo::RutasModeloEmpleado($rutas);

            include $respuesta;
        }
    }
?>