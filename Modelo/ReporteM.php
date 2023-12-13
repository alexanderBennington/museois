<?php
    require_once "ConexionBD.php";
    class ReporteM extends ConexionBD{
        static public function CrearReporteM($datosC, $tablaBD){
            try {
                $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_solicitud, detalles) VALUES (:id_solicitud, :detalles)");
                $pdo->bindParam(":id_solicitud", $datosC["id_solicitud"], PDO::PARAM_INT);
                $pdo->bindParam(":detalles", $datosC["detalles"], PDO::PARAM_STR);
                
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function MostrarSolicitudAprobadaM($tablaBD){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT s.id, c.nombre_obra, s.fecha, s.detalles, s.estado, e.nombre, e.apellido_paterno, e.apellido_materno 
                FROM coleccion c JOIN solicitud s ON s.id_articulo = c.id 
                JOIN empleados e ON e.id = s.id_encargado WHERE s.estado = 'APROBADO' ORDER BY s.id DESC");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }
    }
?>