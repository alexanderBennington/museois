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
                    <th>
                        <form method="POST">
                            <input type="hidden" name="idv" value='.$value["id"].'>
                            <button type="submit" name="seleccionarzonas" class="btn boton">Añadir<br>Zonas</button>
                        </form>
                    </th>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }

        public function MostrarVisitasPublicoC(){
            $respuesta = VisitasM::MostrarVisitasPublicoM();
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["grupo"].'</td>
                    <td>'.$value["fecha"].'</td>
                    <td>'.$value["hora_entrada"].'</td>
                    <td>'.$value["hora_salida"].'</td>
                    <td>'.$value["nombreguia"].' '.$value["appguia"].' '.$value["apmguia"].'</td>
                    <td>'.$value["nombrem"].' '.$value["appm"].' '.$value["apmm"].'</td>
                </tr>';
            }
        }
    
        public function MostrarDetallesVisitaC(){
            $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
            $respuesta = VisitasM::MostrarDetallesVisitaM($id);
            foreach($respuesta as $key => $value){
            echo 
                '<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID DE VISITA</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["id"].'" name=id readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">GRUPO</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["grupo"].'" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ENTRADA</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["hora_entrada"].'" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SALIDA</label>
                    <input class="form-control" aria-describedby="emailHelp" value="'.$value["hora_salida"].'" readonly>
                </div>
                ';
            }
        }

        public function registrarzonasVisitaC(){
            if(isset($_POST["registrar"])){
                $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
                $zonas = $_POST["zona"];
                foreach ($zonas as $indice => $zona) {
                    $zona = filter_var(trim($zona), FILTER_SANITIZE_STRING);
        
                    if (!empty($zona)) {
                        $respuesta = VisitasM::registrarzonasVisitaM($id, $zona);
                        if($respuesta !== "Bien"){
                            header("location: indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=" . urlencode($respuesta));
                            exit();
                        }
                    }
                }
                echo "<script>window.location.href = window.location.href;</script>";
                exit();
            }
        }

        public function mostrarVisitaZonasC(){
            $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
            $respuesta = VisitasM::mostrarVisitaZonasM($id);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["nombre"].'</td>
                </tr>';
            }
        }

        public function mostrarAgendaSemanalC(){
            $dias_semana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
            
            $today = new DateTime();
            $start_of_week = $today->modify('this week')->format('Y-m-d');
            $end_of_week = $today->modify('this week +6 days')->format('Y-m-d');
            
            $current_date = new DateTime($start_of_week);
            while ($current_date <= new DateTime($end_of_week)) {
                $formatted_date = $current_date->format('d-m-Y');
                $day_of_week = $dias_semana[$current_date->format('w')];
                echo "<tr>";
                echo "<td>$day_of_week</td>";
                echo "<td>$formatted_date</td>";
                
                if ($current_date->format('w') == 1) {
                    echo "<td>Cerrado</td>";
                } else {
                    echo "<td>10:00 a.m. - 5:00 p.m.</td>";
                }
                
                echo "</tr>";
                $current_date->modify('+1 day');
            }
        }
        

        public function mostrarAgendaSemanalVisitasC(){
            $respuesta = VisitasM::mostrarAgendaSemanalVisitasM();
            
            $today = new DateTime();
            $start_of_week = $today->modify('this week')->format('Y-m-d');
            $end_of_week = $today->modify('this week +6 days')->format('Y-m-d');

            $current_date = new DateTime($start_of_week);
            while ($current_date <= new DateTime($end_of_week)) {
                $formatted_date = $current_date->format('Y-m-d');
                echo "<tr>";
                echo "<td>$formatted_date</td>";

                $event_found = false;
                
                foreach ($respuesta as $value) {
                    if ($formatted_date == $value["fecha_visita"]) {
                        echo'<td>'.$value["grupo"].'</td>';
                        echo'<td>'.$value["hora_entrada"].'</td>';
                        echo'<td>'.$value["hora_salida"].'</td>';
                        echo'<td>'.$value["zonas"].'</td>';
                        $event_found = true;
                        break;
                    }
                }
                if (!$event_found) {
                    echo'<td colspan="4">SIN EVENTOS</td>';
                }
                echo "</tr>";
                $current_date->modify('+1 day');
            }
        }
    }
?>