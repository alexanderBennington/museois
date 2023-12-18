<?php
    require_once "ConexionBD.php";
    class ZonasM extends ConexionBD{
        static public function NuevoZonaM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (id, nombre, id_administracion, estado) VALUES 
                (:id, :nombre, :id_administracion, :estado)");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_administracion", $datosC["administracion"], PDO::PARAM_INT);
            $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
        }

        static public function EditarZonaM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET id = :id, nombre = :nombre, id_administracion = :id_administracion, estado = :estado WHERE nombre = :nombre
                OR id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_administracion", $datosC["administracion"], PDO::PARAM_INT);
            $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
        }

        static public function EliminarZonaM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
        }

        static public function MostrarZonasM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT zona_museo.id, zona_museo.nombre, administracion.area, zona_museo.estado 
                FROM administracion JOIN zona_museo ON zona_museo.id_administracion = administracion.id ORDER BY administracion.id ASC");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function MostrarZonasOpcionesM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, area FROM $tablaBD");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function MostrarZonasOpciones2M($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT id, nombre FROM $tablaBD");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function MostrarZonasPublicoM(){
            try {
                $pdo = ConexionBD::cBD() ->
                prepare("SELECT
                z.nombre, z.estado, a.nombre, a.apellido_paterno, a.apellido_materno 
            FROM 
                zona_museo z 
                JOIN administracion a ON z.id_administracion = a.id 
            ORDER BY 
                z.nombre");
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