<?php
    class EmpleadosC{
        public function NuevoEmpleadoC(){
            if(isset($_POST["idempA"])){
                //$fecha = $_POST['fechaempA'];
                //$fechaBD = date("d-m-Y", strtotime($fecha));
                //$texto_sin_espacios_inicio_final = trim($nomreempA);
                $datosC = array("id" => $_POST["idempA"],  "nombre" => $_POST["nombreempA"], "apellidop" => $_POST["appempA"], "apellidom" => $_POST["apmempA"],
                    "fecha" => $_POST["fechaempA"], "rfc" => $_POST["rfcempA"], "curp" => $_POST["curpempA"], "nss" => $_POST["nssempA"], 
                    "escolaridad" => $_POST["escolaridadempA"], "zona" => $_POST["zonaempA"], "cv" => $_POST["cvempA"], "tipo" => $_POST["tipoempA"], 
                    "usuario" => $_POST["usuarioempA"], "clave" => $_POST["claveempA"]);
                $tablaBD = "empleados";
                $respuesta = EmpleadosM::NuevoEmpleadoM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vistas/Modulos/ErrorSQLAdmin.php");
                }
            }
        }

        public function EditarEmpleadoC(){
            if(isset($_POST["idempE"])){
                $datosC = array("id" => $_POST["idempE"],  "nombre" => $_POST["nombreempE"], "apellidop" => $_POST["appempE"], "apellidom" => $_POST["apmempE"],
                    "fecha" => $_POST["fechaempE"], "rfc" => $_POST["rfcempE"], "curp" => $_POST["curpempE"], "nss" => $_POST["nssempE"], 
                    "escolaridad" => $_POST["escolaridadempE"], "zona" => $_POST["zonaempE"], "cv" => $_POST["cvempE"], "tipo" => $_POST["tipoempE"], 
                    "usuario" => $_POST["usuarioempE"], "clave" => $_POST["claveempE"]);
                $tablaBD = "empleados";
                $respuesta = EmpleadosM::EditarEmpleadoM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vistas/Modulos/ErrorSQLAdmin.php");
                }
            }
        }

        public function EliminarEmpleadoC(){
            if(isset($_POST["idempEL"])){
                $datosC = $_POST["idempEL"];
                $tablaBD = "empleados";
                $respuesta = EmpleadosM::EliminarEmpleadoM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vistas/Modulos/ErrorSQLAdmin.php");
                }
            }
        }

        public function MostrarEmpleadosC(){
            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["apellido_paterno"].'</td>
                    <td>'.$value["apellido_materno"].'</td>
                    <td>'.$value["fecha_ingreso"].'</td>
                    <td>'.$value["rfc"].'</td>
                    <td>'.$value["curp"].'</td>
                    <td>'.$value["nss"].'</td>
                    <td>'.$value["escolaridad"].'</td>
                    <td>'.$value["area"].'</td>
                    <td>'.$value["tipo"].'</td>
                    <td><a href="Vista/img/empleados/'.$value["cv"].'" target="_blank">'.$value["cv"].'</a></td>
                    <td>'.$value["usuario"].'</td>
                    <td>'.$value["clave"].'</td>
                    <td><a href="http://localhost/museois/Vista/Modulos/credencialpdf.php?id=' . $value["id"] . '" target="_blank">CREDENCIAL</a></td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }

        public function MostrarInvestigadoresC(){
            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarInvestigadoresM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">
                    '.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["tipo"].'
                </option>';
            }
        }

        public function MostrarGuiasC(){
            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarGuiasM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">
                    '.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'
                </option>';
            }
        }

        public function MostrarMonitoresC(){
            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarMonitoresM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">
                    '.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'
                </option>';
            }
        }

        public function MostrarEncargadosColeccionC(){
            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarEncargadosColeccionM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">
                    '.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'
                </option>';
            }
        }

        public function CredencialC(){
            $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
            $nombreImagen = "../img/empleados/" . $id . ".jpg";
            $empleadofoto = "data:image/jpg;base64," . base64_encode(file_get_contents($nombreImagen));
            // Contenido del código QR
            $contenido = $id;

            // Nombre del archivo de salida
            $qrpng = "qr.png";

            // Tamaño y margen del código QR
            $tamaño = 10;
            $margen = 1;

            // Generar el código QR
            QRcode::png($contenido, $qrpng, QR_ECLEVEL_L, $tamaño, $margen);

            $qr = "data:image/png;base64," . base64_encode(file_get_contents($qrpng));

            $respuesta = EmpleadosM::CredencialM($id);
            echo 
                '
                <div align="center" >
                    <h2 style="font-size: 20px;">'.$respuesta["tipo"].'</h2>
                    <img src="'.$empleadofoto.'.jpg" width="150">
                    <h3 style="font-size: 15px;">'.$respuesta["nombre"].' '.$respuesta["apellido_paterno"].' '.$respuesta["apellido_materno"].'</h3>
                    <img src="'.$qr.'.jpg" width="100">
                </div>
                ';
        }
    }
?>