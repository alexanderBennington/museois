<?php
    class SolicitudC{
        public function NuevoSolicitudC(){
            if(isset($_POST["coleccionA"])){
                $datosC = array("id_articulo" => $_POST["coleccionA"],  "detalles" => $_POST["detallesA"], "estado" => "PENDIENTE", "id_encargado" => $_POST["encargadoA"]);
                $tablaBD = "solicitud";
                $respuesta = SolicitudM::NuevoSolicitudM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarSolicitudC(){
            $tablaBD = "solicitud";
            $respuesta = SolicitudM::MostrarSolicitudM($tablaBD);
            foreach($respuesta as $key => $value){
                echo 
                    '<tr>
                        <td>'.$value["id"].'</td>
                        <td>'.$value["nombre_obra"].'</td>
                        <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'</td>
                        <td>'.$value["fecha"].'</td>
                        <td>'.$value["detalles"].'</td>
                        <td>'.$value["estado"].'</td>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="id" value='.$value["id"].'>
                                <button type="submit" name="aprobar" class="btn boton-aprobar">APROBAR</button>
                            </form>';
                    echo
                        '</th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="id" value='.$value["id"].'>
                                <button type="submit" name="noaprobar" class="btn boton">NO APROBAR</button>
                            </form>';
                    echo
                        '</th>
                    </tr>';
            }
        }

        public function AprobarSolicitudC(){
            if(isset($_POST["aprobar"]) && isset($_POST["id"])){
                $datosC = $_POST["id"];
                $tablaBD = "solicitud";
                $respuesta = SolicitudM::AprobarSolicitudM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function NOAprobarSolicitudC(){
            if(isset($_POST["noaprobar"]) && isset($_POST["id"])){
                $datosC = $_POST["id"];
                $tablaBD = "solicitud";
                $respuesta = SolicitudM::NOAprobarSolicitudM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarSolicitudAprobadaC(){
            $tablaBD = "solicitud";
            $respuesta = SolicitudM::MostrarSolicitudAprobadaM($tablaBD);
            foreach($respuesta as $key => $value){
                echo 
                    '<tr>
                        <td>'.$value["id"].'</td>
                        <td>'.$value["nombre_obra"].'</td>
                        <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'</td>
                        <td>'.$value["fecha"].'</td>
                        <td>'.$value["detalles"].'</td>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="id" value='.$value["id"].'>
                                <button type="submit" name="generar" class="btn boton-aprobar">GENERAR<br>REPORTE</button>
                            </form>';
                    echo
                        '</th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="id" value='.$value["id"].'>
                                <button type="submit" name="eliminar" class="btn boton">ELIMINAR<br>REPORTE</button>
                            </form>';
                    echo
                        '</th>
                    </tr>';
            }
        }

        public function MostrarDetallesReporteC(){
            $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
            $tablaBD = "solicitud";
            $respuesta = SolicitudM::MostrarDetallesReporteM($tablaBD, $id);
            foreach($respuesta as $key => $value){
            echo 
                '<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID DE SOLICITUD</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["id"].'" name=id readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ENCARGADO</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ARTICULO</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["nombre_obra"].'" readonly>
                </div>';
            }
        }
    }
?>