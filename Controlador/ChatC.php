<?php
    class ChatC{
        public function RedirigirChatC(){
            if(isset($_POST["seleccionarid"]) && isset($_POST["id"])){
                $id = filter_var(trim($_POST["id"]), FILTER_SANITIZE_STRING);
                echo '<script type="text/javascript">';
                echo 'window.location.href = "indicacionesAdmin.php?ruta=chat&id=' . $id . '"';
                echo '</script>';
            }
        }

        public function RedirigirChatGeneralC(){
            if(isset($_POST["chatgeneral"])){
                echo '<script type="text/javascript">';
                echo 'window.location.href = "indicacionesAdmin.php?ruta=chatgeneral"';
                echo '</script>';
            }
        }

        public function MostrarChatC(){
            $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
            $admin_empleado = ChatM::MostrarChatM($id); 
            foreach($admin_empleado as $key => $value){
                if(strlen($value["id"]) == 1 || strlen($value["id"]) == 2){
                    echo'
                    <div class="cajachat cajachat2" align="left">
                        <div>
                            <p class="p1chat">'.$value["mensaje"].'</p>
                        </div>
                        <div align="right" >
                            <p class="p2chat">'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["area"].' '.$value["fecha_envio"].'</p>
                        </div>
                    </div>
                    ';
                } else{
                    echo'
                    <div class="cajachat cajachat1" align="left">
                        <div>
                            <p class="p1chat">'.$value["mensaje"].'</p>
                        </div>
                        <div align="right">
                            <p class="p2chat">'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["area"].' '.$value["fecha_envio"].'</p>
                        </div>
                    </div>
                    ';
                }
            }
        }

        public function EnviarMensajeChatC(){
            if(isset($_POST["mensaje"]) && isset($_GET["id"])){
                $mensaje = filter_var(trim($_POST["mensaje"]), FILTER_SANITIZE_STRING);
                $id = filter_var(trim($_GET["id"]), FILTER_SANITIZE_STRING);
                if(isset($_SESSION["id"])){
                    $respuesta = ChatM::EnviarMensajeChatM($_SESSION["id"], $id, $mensaje);
                    if($respuesta == "Bien"){
                        echo "<script>window.location.href = window.location.href;</script>";
                        exit();
                    }else{
                        header("location: indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=" . urlencode($respuesta));
                        exit();
                    }
                } else {
                    $respuesta = "Usuario no autenticado";
                }
            }
        }

        public function MostrarChatGeneralC(){
            $chatgeneral = ChatM::MostrarChatGeneralM(); 
            foreach($chatgeneral as $key => $value){
                if($_SESSION["id"] == $value["id"]){
                    echo'
                    <div class="cajachat cajachat2" align="left">
                        <div>
                            <p class="p1chat">'.$value["mensaje"].'</p>
                        </div>
                        <div align="right" >
                            <p class="p2chat">'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["area"].' '.$value["fecha_envio"].'</p>
                        </div>
                    </div>
                    ';
                } else{
                    echo'
                    <div class="cajachat cajachat1" align="left">
                        <div>
                            <p class="p1chat">'.$value["mensaje"].'</p>
                        </div>
                        <div align="right">
                            <p class="p2chat">'.$value["nombre"].' '.$value["apellido_paterno"].' '.$value["apellido_materno"].' '.$value["area"].' '.$value["fecha_envio"].'</p>
                        </div>
                    </div>
                    ';
                }
            }
        }

        public function EnviarMensajeChatGeneralC(){
            if(isset($_POST["mensaje"])){
                $mensaje = filter_var(trim($_POST["mensaje"]), FILTER_SANITIZE_STRING);
                $id = filter_var(trim($_SESSION["id"]), FILTER_SANITIZE_STRING);
                if(isset($_SESSION["id"])){
                    $respuesta = ChatM::EnviarMensajeChatGeneralM($id, $mensaje);
                    if($respuesta == "Bien"){
                        echo "<script>window.location.href = window.location.href;</script>";
                        exit();
                    }else{
                        header("location: indicacionesAdmin.php?ruta=ErrorSQLAdmin&error=" . urlencode($respuesta));
                        exit();
                    }
                } else {
                    $respuesta = "Usuario no autenticado";
                }
            }
        }
    }
?>