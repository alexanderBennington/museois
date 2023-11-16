<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if($rutas == "inicioadmin" || $rutas == "Nuevo" || $rutas == "Salir"){
                $pagina = "Vista/Modulos/".$rutas.".php";
            }else if($rutas == "indicaciones"){
                $pagina = "Vista/Modulos/inicioadmin.php";
            }else{
                $pagina = "Vista/Modulos/inicioadmin.php";
            }
            return $pagina;
        }
    }
?>