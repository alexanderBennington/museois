<?php
    class AdministradoresC{
        public function NuevoAdministradorC(){
            if(isset($_POST["nombreA"])){
                $datosC = array("nombre" => $_POST["nombreA"], "apellidop" => $_POST["appA"], "apellidom" => $_POST["apmA"],
                    "rfc" => $_POST["rfcA"], "curp" => $_POST["curpA"], "nss" => $_POST["nssA"], "area" => $_POST["areaA"], 
                    "usuario" => $_POST["usuarioA"], "clave" => $_POST["claveA"]);
                $tablaBD = "administracion";
                $respuesta = AdministradoresM::NuevoAdministradorM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vistas/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EditarAdministradorC(){
            if(isset($_POST["idE"])){
                $datosC = array("id" => $_POST["idE"], "nombre" => $_POST["nombreE"], "apellidop" => $_POST["appE"], "apellidom" => $_POST["apmE"],
                "rfc" => $_POST["rfcE"], "curp" => $_POST["curpE"], "nss" => $_POST["nssE"], "area" => $_POST["areaE"], 
                "usuario" => $_POST["usuarioE"], "clave" => $_POST["claveE"]);
                $tablaBD = "administracion";
                $respuesta = AdministradoresM::EditarAdministradorM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vistas/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EliminarAdministradorC(){
            if(isset($_POST["idEL"])){
                $datosC = $_POST["idEL"];
                $tablaBD = "administracion";
                $respuesta = AdministradoresM::EliminarAdministradorM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vistas/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarAdministradoresC(){
            $tablaBD = "administracion";
            $respuesta = AdministradoresM::MostrarAdministradoresM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["apellido_paterno"].'</td>
                    <td>'.$value["apellido_materno"].'</td>
                    <td>'.$value["rfc"].'</td>
                    <td>'.$value["curp"].'</td>
                    <td>'.$value["nss"].'</td>
                    <td>'.$value["area"].'</td>
                    <td>'.$value["usuario"].'</td>
                    <td>'.$value["clave"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }

        public function mostrarAdministradoresPublicoC(){
            $tablaBD = 'administracion';
            $respuesta = AdministradoresM::MostrarAdministradoresM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'</td>
                    <td>'.$value["area"].'</td>
                    <td>'.$value["telefono"].'</td>
                </tr>';
            }
        }
    }
?>