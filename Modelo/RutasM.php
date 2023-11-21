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
    }
?>