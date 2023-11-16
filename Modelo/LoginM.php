<?php
    require_once "ConexionBD.php";
    class LoginM extends ConexionBD{
        static public function VerificarM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT usuario, clave, nombre, apellido_paterno, apellido_materno, area FROM $tablaBD WHERE usuario = :usuario");
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
        }
    }
?>