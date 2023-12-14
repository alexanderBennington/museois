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
            if(isset($_POST["eliminar"]) && isset($_POST["idE"])){
                $id = filter_var(trim($_POST["idE"]), FILTER_SANITIZE_STRING);
                $tablaBD = "solicitud";
                $respuesta = ReporteM::EliminarReporteM($id, $tablaBD); 
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

        public function DetallesReporteC(){
            $id = $_GET["id"];
            $respuesta = ReporteM::DetallesReporteM($id);
                echo
                '<div style="margin-top:100px;">
                    <div>
                        <p>Folio: <u>'.$respuesta["id"].'</u></p>
                    </div>
                </div>
    
                <div>
                    <p><span>FORMA DE SOLICITUD:</span> <u>SISTEMA MUSEUM</u></p>
                    <p><span>ARTICULO:</span> <u>'.$respuesta["nombre_obra"].'</u></p>
                    <p><span>FECHA:</span> <u>'.$respuesta["fecha_entrega"].'</u></p>
                    <p><span>RESPONSABLE:</span> <u>'.$respuesta["nombre"].' '.$respuesta["apellido_paterno"].' '.$respuesta["apellido_materno"].'</u></p>
                    <p><span>Descripción De Las Actividades Realizadas</span></p>
                    <div style="width: 100%; height:500px; border: 2px solid black">
                        <p>
                            '.$respuesta["detalles"].'
                        </p>
                    </div>
                </div>';
        }

        public function MostrarReporteC(){
            $respuesta = ReporteM::MostrarReporteM();
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre_obra"].'</td>
                    <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'</td>
                    <td>'.$value["fecha_entrega"].'</td>
                    <th class="boton-aprobar"><a href="http://localhost/museois/Vista/Modulos/reportepdf.php?id=' . $value["id_solicitud"] . '" target="_blank">VER REPORTE</a></th>
                </tr>';
            }
        }
    }
?>