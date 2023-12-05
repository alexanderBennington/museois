<?php
    class VisitasC{
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
    }
?>