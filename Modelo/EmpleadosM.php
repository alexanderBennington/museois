<?php
    require_once "ConexionBD.php";
    class EmpleadosM extends ConexionBD{
        static public function NuevoEmpleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (id, nombre, apellido_paterno, apellido_materno, fecha_ingreso, rfc, curp, nss, 
                escolaridad, id_zona, cv, tipo, usuario, clave, telefono) VALUES (:id, :nombre, :apellido_paterno, :apellido_materno, :fecha_ingreso, :rfc, :curp, :nss, 
                :escolaridad, :id_zona, :cv, :tipo, :usuario, :clave, :telefono)");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_paterno", $datosC["apellidop"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_materno", $datosC["apellidom"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_ingreso", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":rfc", $datosC["rfc"], PDO::PARAM_STR);
            $pdo -> bindParam(":curp", $datosC["curp"], PDO::PARAM_STR);
            $pdo -> bindParam(":nss", $datosC["nss"], PDO::PARAM_STR);
            $pdo -> bindParam(":escolaridad", $datosC["escolaridad"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
            $pdo -> bindParam(":cv", $datosC["cv"], PDO::PARAM_STR);
            $pdo -> bindParam(":tipo", $datosC["tipo"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EditarEmpleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET id = :id, nombre = :nombre, apellido_paterno = :apellido_paterno, apellido_materno = :apellido_materno, 
                fecha_ingreso = :fecha_ingreso, rfc = :rfc, curp = :curp, nss = :nss, escolaridad = :escolaridad, id_zona = :id_zona, cv = :cv, tipo = :tipo,
                usuario = :usuario, clave = :clave, telefono = :telefono WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_paterno", $datosC["apellidop"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido_materno", $datosC["apellidom"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_ingreso", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":rfc", $datosC["rfc"], PDO::PARAM_STR);
            $pdo -> bindParam(":curp", $datosC["curp"], PDO::PARAM_STR);
            $pdo -> bindParam(":nss", $datosC["nss"], PDO::PARAM_STR);
            $pdo -> bindParam(":escolaridad", $datosC["escolaridad"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
            $pdo -> bindParam(":cv", $datosC["cv"], PDO::PARAM_STR);
            $pdo -> bindParam(":tipo", $datosC["tipo"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EliminarEmpleadoM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarEmpleadosM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT e.id, e.nombre, e.apellido_paterno, e.apellido_materno, e.fecha_ingreso, e.rfc, e.curp, e.nss, 
                e.escolaridad, z.nombre as area, e.cv, e.tipo, e.usuario, e.clave, e.telefono FROM $tablaBD e JOIN zona_museo z ON e.id_zona = z.id ORDER BY e.tipo DESC");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function MostrarInvestigadoresM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno, tipo FROM empleados WHERE tipo = 'INVESTIGADOR' OR tipo = 'CATALOGADOR'");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function MostrarGuiasM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno FROM empleados WHERE tipo = 'GUIA'");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function MostrarMonitoresM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno FROM empleados WHERE tipo = 'MONITOR'");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function MostrarEncargadosColeccionM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno FROM empleados WHERE tipo = 'CONS_REST'");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function CredencialM($id){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno, tipo FROM empleados WHERE id = :id");
            $pdo -> bindParam(":id", $id, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }

        static public function MostrarEmpleadosChatM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre, apellido_paterno, apellido_materno, tipo FROM empleados ORDER BY nombre ASC");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function mostrarEmpleadosAseoM(){
            try {
                $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido_paterno, apellido_materno FROM empleados WHERE tipo = 'INTENDENCIA' ORDER BY nombre ASC");
                if ($pdo->execute()) {
                    return $pdo -> fetchAll();
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }
    }
?>