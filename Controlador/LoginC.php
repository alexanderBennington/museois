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
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["apellido_paterno"] = $respuesta["apellido_paterno"];
                        $_SESSION["apellido_materno"] = $respuesta["apellido_materno"];
                        $_SESSION["area"] = $respuesta["area"];
                        //header("location:indicacionesAdmin.php?ruta=inicioadmin");
                        echo '<script type="text/javascript">';
                        echo 'window.location.href = "indicacionesAdmin.php?ruta=inicioadmin"';
                        echo '</script>';
                    } else {
                        header("location:sesionadminerror.php");
                        exit();
                    }
                }
            }
        }

        public function VerificarempleadoC(){
            if(isset($_POST["usuario"])){
                $datosC = array("usuario" => $_POST["usuario"], "clave" => $_POST["clave"]);
                if($datosC["usuario"]=="" || $datosC["clave"]==""){
                    header("location:sesionempleado.php");
                }else{
                    $tablaBD = "empleados";
                    $respuesta = LoginM::VerificarempleadoM($datosC, $tablaBD);
                    if($respuesta["usuario"] == $_POST["usuario"] && $respuesta["clave"] == $_POST["clave"]){
                        session_start();
                        $_SESSION["ingresoempl"] = true;
                        $_SESSION["usuario"] = $datosC["usuario"];
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["apellido_paterno"] = $respuesta["apellido_paterno"];
                        $_SESSION["apellido_materno"] = $respuesta["apellido_materno"];
                        $_SESSION["tipo"] = $respuesta["tipo"];
                        $_SESSION["telefono"] = $respuesta["telefono"];
                        //header("location:indicacionesAdmin.php?ruta=inicioadmin");
                        echo '<script type="text/javascript">';
                        echo 'window.location.href = "indicaciones.php?ruta=principal"';
                        echo '</script>';
                    } else {
                        header("location:sesionempleado.php");
                        exit();
                    }
                }
            }
        }
    }
?>