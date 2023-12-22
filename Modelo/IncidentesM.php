<?php
    require_once "ConexionBD.php";
    class IncidentesM extends ConexionBD{
        static public function agregarIncidenteM($datosC){
            try {
                $fecha_hora = $datosC["fecha"] .' '. $datosC["hora"];
                $pdo = ConexionBD::cBD()->prepare("INSERT INTO incidentes (detalles, fecha, id_empleado) VALUES (:detalles, :fecha, :id_empleado)");
                $pdo->bindParam(":detalles", $datosC["detalles"], PDO::PARAM_STR);
                $pdo->bindParam(":fecha", $fecha_hora, PDO::PARAM_STR);
                $pdo->bindParam(":id_empleado", $datosC["empleado"], PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function mostrarIncidentesM(){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT
                    a.id, e.nombre, e.apellido_paterno, e.apellido_materno, e.tipo, a.detalles, a.fecha
                FROM 
                    incidentes a
                    JOIN empleados e ON a.id_empleado = e.id
                ORDER BY 
                    a.id DESC
                ");
                if ($pdo->execute()) {
                    return $pdo -> fetchAll();
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function detallesIncidenteM($id){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT
                    a.id, e.nombre, e.apellido_paterno, e.apellido_materno, e.tipo, a.detalles, a.fecha
                FROM 
                    incidentes a
                    JOIN empleados e ON a.id_empleado = e.id
                WHERE 
                    a.id = :id
                ");
                $pdo->bindParam(":id", $id, PDO::PARAM_INT);
                if ($pdo->execute()) {
                    return $pdo -> fetch();
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }
    }
?>