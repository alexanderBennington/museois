<?php
    class EmpleadosC{
        public function NuevoEmpleadoC(){
            if(isset($_POST["idempA"])){
                //$fecha = $_POST['fechaempA'];
                //$fechaBD = date("d-m-Y", strtotime($fecha));
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
                    <td>'.$value["zona"].'</td>
                    <td>'.$value["tipo"].'</td>
                    <td>'.$value["cv"].'</td>
                    <td>'.$value["usuario"].'</td>
                    <td>'.$value["clave"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }
    }
?>