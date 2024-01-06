<?php
    require_once "ConexionBD.php";
    class LoginM extends ConexionBD{
        static public function VerificarM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tablaBD WHERE usuario = :usuario AND area = 'DIRECCION'");
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }

        static public function VerificarempleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tablaBD WHERE usuario = :usuario");
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }
    }
?>