<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if($rutas == "Historial" || $rutas == "Nuevo" || $rutas == "Salir"){
                $pagina = "Vista/Modulos/".$rutas.".php";
            }else if($rutas == "indicaciones"){
                $pagina = "Vista/Modulos/Historial.php";
            }else{
                $pagina = "Vista/Modulos/Historial.php";
            }
            return $pagina;
        }
    }
?>