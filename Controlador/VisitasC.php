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
    }
?>