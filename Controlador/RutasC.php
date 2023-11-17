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
    }
?>