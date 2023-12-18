<?php
    class VisitasC{
        public function NuevoVisitaC(){
            if(isset($_POST["grupoA"])){
                $datosC = array("grupo" => $_POST["grupoA"],  "fecha" => $_POST["fechaA"], "horae" => $_POST["horaeA"], "horas" => $_POST["horasA"], "guia" => $_POST["guiaA"],
                    "monitor" => $_POST["monitorA"], "estado" => $_POST["estadoA"]);
                $tablaBD = "Visitas";
                $respuesta = VisitasM::NuevoVisitaM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EditarVisitaC(){
            if(isset($_POST["idE"])){
                $datosC = array("id" => $_POST["idE"], "grupo" => $_POST["grupoE"],  "fecha" => $_POST["fechaE"], "horae" => $_POST["horaeE"], "horas" => $_POST["horasE"], 
                "guia" => $_POST["guiaE"], "monitor" => $_POST["monitorE"], "estado" => $_POST["estadoE"]);
                $tablaBD = "Visitas";
                $respuesta = VisitasM::EditarVisitaM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EliminarVisitaC(){
            if(isset($_POST["idEL"])){
                $datosC = $_POST["idEL"];
                $tablaBD = "Visitas";
                $respuesta = VisitasM::EliminarVisitaM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarVisitasC(){
            $tablaBD = "Visitas";
            $respuesta = VisitasM::MostrarVisitasM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["grupo"].'</td>
                    <td>'.$value["fecha_registro"].'</td>
                    <td>'.$value["fecha_visita"].'</td>
                    <td>'.$value["hora_entrada"].'</td>
                    <td>'.$value["hora_salida"].'</td>
                    <td>'.$value["estado"].'</td>
                    <td>'.$value["id_emp1"].' '.$value["nombre1"].' '.$value["app1"].' '.$value["apm1"].'</td>
                    <td>'.$value["id_emp2"].' '.$value["nombre2"].' '.$value["app2"].' '.$value["apm2"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }

        public function MostrarVisitasPublicoC(){
            $respuesta = VisitasM::MostrarVisitasPublicoM();
            foreach($respuesta as $key => $value){
            echo 
                '
                <tr>
                    <th scope="row">'.$value["grupo"].'</th>
                    <td>'.$value["fecha"].'</td>
                    <td>'.$value["hora_entrada"].'</td>
                    <td>'.$value["hora_salida"].'</td>
                    <td>'.$value["nombreguia"].' '.$value["appguia"].' '.$value["apmguia"].'</td>
                    <td>'.$value["nombrem"].' '.$value["appm"].' '.$value["apmm"].'</td>
                </tr>
                ';
            }
        }
    }
?>