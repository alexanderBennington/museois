<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if($rutas == "inicioadmin" || $rutas == "editarempleados" || $rutas == "editaranuncios" || $rutas == "salir"){
                $pagina = "Vista/Modulos/".$rutas.".php";
            }else if($rutas == "indicacionesAdmin"){
                $pagina = "Vista/Modulos/inicioadmin.php";
            }else{
                $pagina = "Vista/Modulos/inicioadmin.php";
            }
            return $pagina;
        }

        static public function RutasModeloPublico($rutas){
            if($rutas == "principal"){
                $pagina = "Vista/ModulosPrincipal/".$rutas.".php";
            }else if($rutas == "index"){
                $pagina = "Vista/ModulosPrincipal/principal.php";
            }else{
                $pagina = "Vista/ModulosPrincipal/principal.php";
            }
            return $pagina;
        }
    }
?>