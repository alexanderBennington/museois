<?php
    class SolicitudC{
        public function NuevoSolicitudC(){
            if(isset($_POST["coleccionA"])){
                $datosC = array("id_articulo" => $_POST["coleccionA"],  "detalles" => $_POST["detallesA"], "estado" => $_POST["estadoA"], "id_encargado" => $_POST["encargadoA"]);
                $tablaBD = "solicitud";
                $respuesta = SolicitudM::NuevoSolicitudM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }
    }
?>