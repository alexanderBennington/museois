<?php
    class AnunciosC{
        public function NuevoAnuncioC(){
            if(isset($_POST["tituloA"])){
                $datosC = array("titulo" => $_POST["tituloA"],  "subtitulo" => $_POST["subtituloA"], "contenido" => $_POST["contenidoA"], "imagen" => $_POST["imagenA"],
                    "dato1" => $_POST["dato1A"], "dato2" => $_POST["dato2A"], "dato3" => $_POST["dato3A"], "dato4" => $_POST["dato4A"], "publicado" => $_POST["publicadoA"]);
                $tablaBD = "anuncios";
                $respuesta = AnunciosM::NuevoAnuncioM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EditarAnuncioC(){
            if(isset($_POST["idE"])){
                $datosC = array("id" => $_POST["idE"], "titulo" => $_POST["tituloE"],  "subtitulo" => $_POST["subtituloE"], "contenido" => $_POST["contenidoE"], "imagen" => $_POST["imagenE"],
                "dato1" => $_POST["dato1E"], "dato2" => $_POST["dato2E"], "dato3" => $_POST["dato3E"], "dato4" => $_POST["dato4E"], "publicado" => $_POST["publicadoE"]);
                $tablaBD = "anuncios";
                $respuesta = AnunciosM::EditarAnuncioM($datosC, $tablaBD); 
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function EliminarAnuncioC(){
            if(isset($_POST["idEL"])){
                $datosC = $_POST["idEL"];
                $tablaBD = "anuncios";
                $respuesta = AnunciosM::EliminarAnuncioM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    echo "<script>console.log('Bien');</script>";
                }else{
                    header("location:Vista/Modulos/ErrorSQL.php");
                }
            }
        }

        public function MostrarAnunciosC(){
            $tablaBD = "anuncios";
            $respuesta = AnunciosM::MostrarAnunciosM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["titulo"].'</td>
                    <td>'.$value["subtitulo"].'</td>
                    <td><div class="over-y">'.$value["contenido"].'</div></td>
                    <td><a href="Vista/img/anuncios/'.$value["imagen"].'" target="_blank">'.$value["imagen"].'</a></td>
                    <td>'.$value["dato1"].'</td>
                    <td>'.$value["dato2"].'</td>
                    <td>'.$value["dato3"].'</td>
                    <td>'.$value["dato4"].'</td>
                    <td>'.$value["fecha"].'</td>
                    <td>'.$value["estado"].'</td>
                    <th class="boton">ESCOGER</th>
                </tr>';
            }
        }

        public function MostrarAnunciosPublicoC(){
            $tablaBD = "anuncios";
            $respuesta = AnunciosM::MostrarAnunciosPublicoM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '
                <div class="item">
                    <div class="tarjeta">
                        <div class="cont-rel">
                            <img src="Vista/img/anuncios/'.$value["imagen"].'" alt="">
                            <div class="img-text">
                                <h2>'.$value["titulo"].'</h2>
                                <h3>'.$value["subtitulo"].'</h3>
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#anuncio'.$value["id"].'">Ver más</button>
                            </div>
                        </div>
                        <div class="caja1 row">
                            <div class="col text-izq">
                                <p>
                                    '.$value["dato1"].'<br>Boleto:<br>$'.$value["dato2"].'
                                </p>
                            </div>
                            <div class="col text-der">
                                <p>
                                    '.$value["dato3"].'<br>Área:<br>'.$value["dato4"].'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        }

        public function MostrarModalC(){
            $tablaBD = "anuncios";
            $respuesta = AnunciosM::MostrarAnunciosM($tablaBD);
            foreach($respuesta as $key => $value){
            echo 
                '
                <div class="modal fade" id="anuncio'.$value["id"].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">'.$value["titulo"].'<br>'.$value["subtitulo"].'</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                '.$value["contenido"].'<br><br>
                                <div align="center">
                                    <img src="Vista/img/anuncios/'.$value["imagen"].'" alt="logo" width="400">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        }
    }
?>