<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if($rutas == "inicioadmin" || $rutas == "editarempleados" || $rutas == "editaranuncios" || $rutas == "editaradministracion" 
                || $rutas == "editarzonas" || $rutas == "editarcoleccion" || $rutas == "editarvisitas" ||  $rutas == "solicitud" 
                || $rutas == "reportes" || $rutas == "generarreportes" || $rutas == "seleccionarchat" || $rutas == "chat"
                || $rutas == "chatgeneral" || $rutas == "seleccionarzonas" || $rutas == "editaraseo" 
                || $rutas == "editarequipos" || $rutas == "actividades" || $rutas == "ErrorSQLAdmin"
                || $rutas == "seguridad" || $rutas == "incidentes" ||  $rutas == "salir"){
                $pagina = "Vista/Modulos/".$rutas.".php";
            }else if($rutas == "indicacionesAdmin"){
                $pagina = "Vista/Modulos/inicioadmin.php";
            }else{
                $pagina = "Vista/Modulos/inicioadmin.php";
            }
            return $pagina;
        }

        static public function RutasModeloPublico($rutas){
            if($rutas == "principal" || $rutas == "historia" || $rutas == "investigacion" || $rutas == "grupos" || $rutas == "salas"
                || $rutas == "horarios" || $rutas == "boletos" || $rutas == "historia" || $rutas == "tienda" || $rutas == "seguridad" 
                || $rutas == "plano" || $rutas == "ubicacion" || $rutas == "directorio"){
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