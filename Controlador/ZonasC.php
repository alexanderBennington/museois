<?php
    class ZonasC{
        public function NuevoZonaC(){
            if(isset($_POST["idA"])){
                $datosC = array("id" => $_POST["idA"],  "nombre" => $_POST["nombreA"], "administracion" => $_POST["adminA"], "estado" => $_POST["estadoA"]);
                $tablaBD = "zona_museo";
                $respuesta = ZonasM::NuevoZonaM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EditarZonaC(){
            if(isset($_POST["idE"])){
                $datosC = array("id" => $_POST["idE"], "nombre" => $_POST["nombreE"],  "administracion" => $_POST["adminE"], "estado" => $_POST["estadoE"]);
                $tablaBD = "zona_museo";
                $respuesta = ZonasM::EditarZonaM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EliminarZonaC(){
            if(isset($_POST["idEL"])){
                $datosC = $_POST["idEL"];
                $tablaBD = "zona_museo";
                $respuesta = ZonasM::EliminarZonaM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarZonasC(){
            $tablaBD = "zona_museo";
            $respuesta = ZonasM::MostrarZonasM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["area"].'</td>
                    <td>'.$value["estado"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }

        public function MostrarZonasOpcionesC(){
            $tablaBD = "administracion";
            $respuesta = ZonasM::MostrarZonasOpcionesM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">'.$value["area"].'</option>';
            }
        }

        public function MostrarZonasOpciones2C(){
            $tablaBD = "zona_museo";
            $respuesta = ZonasM::MostrarZonasOpciones2M($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
            }
        }

        public function MostrarZonasPublicoC(){
            $respuesta = ZonasM::MostrarZonasPublicoM();
            foreach($respuesta as $key => $value){
            echo 
                '
                <tr>
                    <th scope="row">'.$value["nombre_zona"].'</th>
                    <td>'.$value["estado"].'</td>
                    <td>'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].'</td>
                </tr>
                ';
            }
        }

        public function MostrarZonasVisitasC(){
            $tablaBD = "zona_museo";
            $respuesta = ZonasM::MostrarZonasM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
            }
        }

        public function iraseleleccionarZonasC(){
            if(isset($_POST["seleccionarzonas"]) && isset($_POST["idv"])){
                $id = filter_var(trim($_POST["idv"]), FILTER_SANITIZE_STRING);
                echo '<script type="text/javascript">';
                echo 'window.location.href = "indicacionesAdmin.php?ruta=seleccionarzonas&id='. urlencode($id).'"';
                echo '</script>';
            }
        }
        
    }
?>