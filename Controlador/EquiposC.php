<?php
    class EquiposC{
        public function agregarEquipoC(){
            if(isset($_POST["dispositivoA"])){
                $datosC = array(
                    "nombre" => filter_var(trim($_POST["nombreA"]), FILTER_SANITIZE_STRING), 
                    "dispositivo" => filter_var(trim($_POST["dispositivoA"]), FILTER_SANITIZE_STRING),  
                    "ip" => filter_var(trim($_POST["ipA"]), FILTER_SANITIZE_STRING),   
                    "zona" => filter_var(trim($_POST["zonaA"]), FILTER_SANITIZE_STRING)
                    );
                $respuesta = EquiposM::agregarEquipoM($datosC); 
                if($respuesta == "Bien"){
                    echo "<script>window.location.href = window.location.href;</script>";
                    exit();
                }else{
                    echo '<script>window.location.href = "indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=' . urlencode($respuesta) . '";</script>';
                    exit();
                }
            }
        }

        public function editarEquipoC(){
            if(isset($_POST["idE"])){
                $datosC = array(
                    "id" => filter_var(trim($_POST["idE"]), FILTER_SANITIZE_NUMBER_INT), 
                    "nombre" => filter_var(trim($_POST["nombreE"]), FILTER_SANITIZE_STRING),  
                    "dispositivo" => filter_var(trim($_POST["dispositivoE"]), FILTER_SANITIZE_STRING),  
                    "ip" => filter_var(trim($_POST["ipE"]), FILTER_SANITIZE_STRING),   
                    "zona" => filter_var(trim($_POST["zonaE"]), FILTER_SANITIZE_STRING)
                    );
                $respuesta = EquiposM::editarEquipoM($datosC); 
                if($respuesta == "Bien"){
                    echo "<script>window.location.href = window.location.href;</script>";
                    exit();
                }else{
                    echo '<script>window.location.href = "indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=' . urlencode($respuesta) . '";</script>';
                    exit();
                }
            }
        }

        public function eliminarEquipoC(){
            if(isset($_POST["idEL"])){
                $id = filter_var(trim($_POST["idEL"]), FILTER_SANITIZE_NUMBER_INT);
                $respuesta = EquiposM::eliminarEquipoM($id);
                if($respuesta == "Bien"){
                    echo "<script>window.location.href = window.location.href;</script>";
                    exit();
                }else{
                    echo '<script>window.location.href = "indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=' . urlencode($respuesta) . '";</script>';
                    exit();
                }
            }
        }

        public function mostrarEquiposC(){
            $respuesta = EquiposM::mostrarEquiposM();
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id_ns"].'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["dispositivo"].'</td>
                    <td>'.$value["dir_ip"].'</td>
                    <td>'.$value["zona"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }
    }
?>