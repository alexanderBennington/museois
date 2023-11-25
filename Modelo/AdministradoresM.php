<?php
    require_once "ConexionBD.php";
    class AdministradoresM extends ConexionBD{
        static public function NuevoAdministradorM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (nombre, apellido_paterno, apellido_materno, rfc, curp, nss, 
                area, usuario, clave) VALUES (:nombre, :apellido_paterno, :apellido_materno, :rfc, :curp, :nss, 
                :area, :usuario, :clave)");
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_paterno", $datosC["apellidop"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_materno", $datosC["apellidom"], PDO::PARAM_STR);
            $pdo -> bindParam(":rfc", $datosC["rfc"], PDO::PARAM_STR);
            $pdo -> bindParam(":curp", $datosC["curp"], PDO::PARAM_STR);
            $pdo -> bindParam(":nss", $datosC["nss"], PDO::PARAM_STR);
            $pdo -> bindParam(":area", $datosC["area"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EditarAdministradorM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET id = :id, nombre = :nombre, apellido_paterno = :apellido_paterno, apellido_materno = :apellido_materno, 
                rfc = :rfc, curp = :curp, nss = :nss, area = :area, usuario = :usuario, clave = :clave WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_paterno", $datosC["apellidop"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_materno", $datosC["apellidom"], PDO::PARAM_STR);
            $pdo -> bindParam(":rfc", $datosC["rfc"], PDO::PARAM_STR);
            $pdo -> bindParam(":curp", $datosC["curp"], PDO::PARAM_STR);
            $pdo -> bindParam(":nss", $datosC["nss"], PDO::PARAM_STR);
            $pdo -> bindParam(":area", $datosC["area"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EliminarAdministradorM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarAdministradoresM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tablaBD ");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }
    }
?>