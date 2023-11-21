<?php
    require_once "ConexionBD.php";
    class EmpleadosM extends ConexionBD{
        static public function NuevoEmpleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (id, nombre, apellido_paterno, apellido_materno, fecha_ingreso, rfc, curp, nss, 
                escolaridad, zona, cv, tipo, usuario, clave) VALUES (:id, :nombre, :apellido_paterno, :apellido_materno, :fecha_ingreso, :rfc, :curp, :nss, 
                :escolaridad, :zona, :cv, :tipo, :usuario, :clave)");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_paterno", $datosC["apellidop"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_materno", $datosC["apellidom"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_ingreso", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":rfc", $datosC["rfc"], PDO::PARAM_STR);
            $pdo -> bindParam(":curp", $datosC["curp"], PDO::PARAM_STR);
            $pdo -> bindParam(":nss", $datosC["nss"], PDO::PARAM_STR);
            $pdo -> bindParam(":escolaridad", $datosC["escolaridad"], PDO::PARAM_STR);
            $pdo -> bindParam(":zona", $datosC["zona"], PDO::PARAM_INT);
            $pdo -> bindParam(":cv", $datosC["cv"], PDO::PARAM_STR);
            $pdo -> bindParam(":tipo", $datosC["tipo"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EditarEmpleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET id = :id, nombre = :nombre, apellido_paterno = :apellido_paterno, apellido_materno = :apellido_materno, 
                fecha_ingreso = :fecha_ingreso, rfc = :rfc, curp = :curp, nss = :nss, escolaridad = :escolaridad, zona = :zona, cv = :cv, tipo = :tipo,
                usuario = :usuario, clave = :clave WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_paterno", $datosC["apellidop"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_materno", $datosC["apellidom"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_ingreso", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":rfc", $datosC["rfc"], PDO::PARAM_STR);
            $pdo -> bindParam(":curp", $datosC["curp"], PDO::PARAM_STR);
            $pdo -> bindParam(":nss", $datosC["nss"], PDO::PARAM_STR);
            $pdo -> bindParam(":escolaridad", $datosC["escolaridad"], PDO::PARAM_STR);
            $pdo -> bindParam(":zona", $datosC["zona"], PDO::PARAM_INT);
            $pdo -> bindParam(":cv", $datosC["cv"], PDO::PARAM_STR);
            $pdo -> bindParam(":tipo", $datosC["tipo"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EliminarEmpleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarEmpleadosM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno, fecha_ingreso, rfc, curp, nss, 
                escolaridad, zona, cv, tipo, usuario, clave FROM $tablaBD ");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }
    }
?>