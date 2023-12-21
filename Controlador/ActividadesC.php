<?php
    class ActividadesC{
        public function agregarActividadC(){
            if(isset($_POST["empleado"])){
                $datosC = array(
                    "empleado" => filter_var(trim($_POST["empleado"]), FILTER_SANITIZE_STRING), 
                    "detalles" => filter_var(trim($_POST["detalles"]), FILTER_SANITIZE_STRING),  
                    "fecha" => filter_var(trim($_POST["fecha"]), FILTER_SANITIZE_STRING),   
                    );
                $respuesta = ActividadesM::agregarActividadM($datosC); 
                if($respuesta == "Bien"){
                    echo "<script>window.location.href = window.location.href;</script>";
                    exit();
                }else{
                    echo '<script>window.location.href = "indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=' . urlencode($respuesta) . '";</script>';
                    exit();
                }
            }
        }

        public function mostrarActividadesC(){
            $respuesta = ActividadesM::mostrarActividadesM();
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["tipo"].'</td>
                    <td><div class="over-y">'.$value["detalles"].'</div></td>
                    <td>'.$value["fecha"].'</td>
                    <th class="boton">
                        <form method="POST">
                            <input type="hidden" name="idA" value='.$value["id"].'>
                            <button type="submit" name="actividad" class="btn boton">VER<br>ACTIVIDAD</button>
                        </form>
                    </th>
                </tr>';
            }
        }

        public function mostrarHojaActividadC(){
            if(isset($_POST["idA"])){
                $id = filter_var(trim($_POST["idA"]), FILTER_SANITIZE_NUMBER_INT);
                echo '<script type="text/javascript">';
                echo 'window.open("http://localhost/museois/Vista/Modulos/actividadpdf.php?id=' . urlencode($id) . '", "_blank");';
                echo '</script>';
            }
        }

        public function detallesActividadC(){
            if(isset($_GET["id"])){
                $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_NUMBER_INT);
                $respuesta = ActividadesM::detallesActividadM($id);
                echo
                '<div style="margin-top:100px;">
                    <div>
                        <p>Folio: <u>'.$respuesta["id"].'</u></p>
                    </div>
                </div>
    
                <div>
                    <p><span>FORMA:</span> <u>SISTEMA MUSEUM</u></p>
                    <p><span>FECHA:</span> <u>'.$respuesta["fecha"].'</u></p>
                    <p><span>EMPLEADO:</span> <u>'.$respuesta["nombre"].' '.$respuesta["apellido_paterno"].' '.$respuesta["apellido_materno"].'</u></p>
                    <p><span>TIPO:</span> <u>'.$respuesta["tipo"].'</u></p>
                    <p><span>Descripción De Las Actividades Realizadas</span></p>
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