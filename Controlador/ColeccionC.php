<?php
    class ColeccionC{
        public function NuevoColeccionC(){
            if(isset($_POST["idA"])){
                $datosC = array("id" => $_POST["idA"],  "nombre" => $_POST["nombreA"], "fecha" => $_POST["fechaA"], "zona" => $_POST["zonaA"], "investigador" => $_POST["invA"]);
                $tablaBD = "coleccion";
                $respuesta = ColeccionM::NuevoColeccionM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EditarColeccionC(){
            if(isset($_POST["idE"])){
                $datosC = array("id" => $_POST["idE"], "nombre" => $_POST["nombreE"],  "fecha" => $_POST["fechaE"], "zona" => $_POST["zonaE"], "investigador" => $_POST["invE"]);
                $tablaBD = "coleccion";
                $respuesta = ColeccionM::EditarColeccionM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EliminarColeccionC(){
            if(isset($_POST["idEL"])){
                $datosC = $_POST["idEL"];
                $tablaBD = "coleccion";
                $respuesta = ColeccionM::EliminarColeccionM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarColeccionC(){
            $tablaBD = "coleccion";
            $respuesta = ColeccionM::MostrarColeccionM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["nombre_obra"].'</td>
                    <td>'.$value["fecha_adicion"].'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["id_investigador"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }
    }
?>