<?php
    class LoginC{
        public function VerificarC(){
            if(isset($_POST["usuarioadmin"])){
                $datosC = array("usuario" => $_POST["usuarioadmin"], "clave" => $_POST["claveadmin"]);
                if($datosC["usuario"]=="" || $datosC["clave"]==""){
                    header("location:sesionadminerror.php");
                }else{
                    $tablaBD = "administracion";
                    $respuesta = LoginM::VerificarM($datosC, $tablaBD);
                    if($respuesta["usuario"] == $_POST["usuarioadmin"] && $respuesta["clave"] == $_POST["claveadmin"]){
                        session_start();
                        $_SESSION["ingreso"] = true;
                        $_SESSION["usuarioadmin"] = $datosC["usuario"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["apellido_paterno"] = $respuesta["apellido_paterno"];
                        $_SESSION["apellido_materno"] = $respuesta["apellido_materno"];
                        $_SESSION["area"] = $respuesta["area"];
                        header("location:indicacionesAdmin.php?ruta=inicioadmin");
                    }else{
                        header("location:sesionadminerror.php");
                    }
                }
            }
        }
    }
?>