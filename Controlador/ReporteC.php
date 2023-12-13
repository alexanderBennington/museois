<?php
    class ReporteC{
        public function CrearReporteC(){
            if(isset($_POST["id"])){
                $datosC = array(
                    "id_solicitud" => filter_var(trim($_POST["id"]), FILTER_SANITIZE_STRING),
                    "detalles" => filter_var(trim($_POST["detalles"]), FILTER_SANITIZE_STRING)
                );
                $tablaBD = "reporte";
                $respuesta = ReporteM::CrearReporteM($datosC, $tablaBD); 
                $respuesta2 = SolicitudM::ActualizarSolicitudM($datosC); 
                if($respuesta == "Bien" && $respuesta2 == "Bien"){
                    // Abrir una nueva pestaña con el parámetro id usando JavaScript
                    echo '<script type="text/javascript">';
                    echo 'window.open("http://localhost/museois/Vista/Modulos/reportepdf.php?id=' . $datosC["id_solicitud"] . '", "_blank");';
                    echo 'window.location.href = "indicacionesAdmin.php?ruta=reportes";';
                    echo '</script>';
                } else {
                    header("location: indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=" . urlencode($respuesta));
                    exit();
                }
            }
        }
        
        public function GenerarReporteC(){
            if(isset($_POST["generar"]) && isset($_POST["id"])){
                $id = filter_var(trim($_POST["id"]), FILTER_SANITIZE_STRING);
                $this->redirigirAReportesConId($id);
            }
        }
        
        public function EliminarReporteC(){
            if(isset($_POST["noaprobar"]) && isset($_POST["id"])){
                $datosC = $_POST["id"];
                $tablaBD = "solicitud";
                $respuesta = SolicitudM::EliminarReporteM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location: indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=" . urlencode($respuesta));
                    exit();
                }
            }
        }
    
        private function redirigirAReportesConId($id) {
            header("Location: indicacionesAdmin.php?ruta=generarreportes&id=" . urlencode($id));
            exit();
        }
    }
?>