<?php
    class IncidentesC{
        public function agregarIncidenteC(){
            if(isset($_POST["empleado"])){
                $datosC = array(
                    "empleado" => filter_var(trim($_POST["empleado"]), FILTER_SANITIZE_STRING), 
                    "detalles" => filter_var(trim($_POST["detalles"]), FILTER_SANITIZE_STRING),  
                    "fecha" => filter_var(trim($_POST["fecha"]), FILTER_SANITIZE_STRING),   
                    "hora" => filter_var(trim($_POST["hora"]), FILTER_SANITIZE_STRING)
                    );
                $respuesta = IncidentesM::agregarIncidenteM($datosC); 
                if($respuesta == "Bien"){
                    echo "<script>window.location.href = window.location.href;</script>";
                    exit();
                }else{
                    echo '<script>window.location.href = "indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=' . urlencode($respuesta) . '";</script>';
                    exit();
                }
            }
        }

        public function mostrarIncidentesC(){
            $respuesta = IncidentesM::mostrarIncidentesM();
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["tipo"].'</td>
                    <td><div class="over-y">'.$value["detalles"].'</div></td>
                    <td>'.$value["fecha"].'</td>
                    <th class="boton">
                        <form method="POST">
                            <input type="hidden" name="idI" value='.$value["id"].'>
                            <button type="submit" name="incidente" class="btn boton">VER<br>INCIDENTE</button>
                        </form>
                    </th>
                </tr>';
            }
        }

        public function mostrarHojaIncidenteC(){
            if(isset($_POST["idI"])){
                $id = filter_var(trim($_POST["idI"]), FILTER_SANITIZE_NUMBER_INT);
                echo '<script type="text/javascript">';
                echo 'window.open("http://localhost/museois/Vista/Modulos/incidentepdf.php?id=' . urlencode($id) . '", "_blank");';
                echo '</script>';
            }
        }

        public function detallesIncidenteC(){
            if(isset($_GET["id"])){
                $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_NUMBER_INT);
                $respuesta = IncidentesM::detallesIncidenteM($id);
                echo
                '<div style="margin-top:100px;">
                    <div>
                        <p>Folio: <u>'.$respuesta["id"].'</u></p>
                    </div>
                </div>
    
                <div>
                    <p><span>FORMA:</span> <u>SISTEMA MUSEUM</u></p>
                    <p><span>FECHA y HORA:</span> <u>'.$respuesta["fecha"].'</u></p>
                    <p><span>EMPLEADO:</span> <u>'.$respuesta["nombre"].' '.$respuesta["apellido_paterno"].' '.$respuesta["apellido_materno"].'</u></p>
                    <p><span>TIPO:</span> <u>'.$respuesta["tipo"].'</u></p>
                    <p><span>Descripción Del Incidente</span></p>
                    <div style="width: 100%; min-height:500px; border: 2px solid black">
                        <p>
                            '.$respuesta["detalles"].'
                        </p>
                    </div>
                </div>';
            }
        }
    }
?>