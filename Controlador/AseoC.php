<?php
    class AseoC{
        public function agregarAseoC(){
            if(isset($_POST["zona"])){
                $datosC = array(
                    "zona" => filter_var(trim($_POST["zona"]), FILTER_SANITIZE_STRING),
                    "fecha" => filter_var(trim($_POST["fecha"]), FILTER_SANITIZE_STRING),
                    "hora" => filter_var(trim($_POST["hora"]), FILTER_SANITIZE_STRING),
                    "encargado" => filter_var(trim($_POST["encargado"]), FILTER_SANITIZE_STRING)
                );
                $respuesta = AseoM::agregarAseoM($datosC); 
                if($respuesta == "Bien"){
                    echo "<script>window.location.href = window.location.href;</script>";
                    exit();
                } else {
                    header("location: indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=" . urlencode($respuesta));
                    exit();
                }
            }
        }

        public function mostrarAseoC(){
            $respuesta = AseoM::mostrarAseoM();
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["zona"].'</td>
                    <td>'.$value["fecha"].'</td>
                    <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'</td>
                </tr>';
                
            }
        }
    }
?>