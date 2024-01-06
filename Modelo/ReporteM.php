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

        static public function EliminarReporteM($id, $tablaBD){
            try {
                $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET estado = 'CANCELADO' WHERE id = :id");
                $pdo->bindParam(":id", $id, PDO::PARAM_INT);
                
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

        static public function DetallesReporteM($id){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT r.id, r.fecha_entrega, r.detalles, c.nombre_obra, e.nombre, e.apellido_paterno, e.apellido_materno
                FROM reporte AS r
                JOIN solicitud AS s ON r.id_solicitud = s.id
                JOIN coleccion AS c ON s.id_articulo = c.id
                JOIN empleados AS e ON s.id_encargado = e.id
                WHERE s.id = :id
            ");
            $pdo->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo -> fetch();
        }

        static public function MostrarReporteM(){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT r.id, s.id AS id_solicitud, r.fecha_entrega, r.detalles, c.nombre_obra, e.nombre, e.apellido_paterno, e.apellido_materno
                FROM reporte AS r
                JOIN solicitud AS s ON r.id_solicitud = s.id
                JOIN coleccion AS c ON s.id_articulo = c.id
                JOIN empleados AS e ON s.id_encargado = e.id
                ORDER BY r.id ASC
            ");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function GraficaCuentaSolicitudM(){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT c.nombre_obra, COUNT(*) AS cantidad_repeticiones 
                FROM solicitud s 
                JOIN coleccion c ON s.id_articulo = c.id
                GROUP BY s.id_articulo;
            ");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function GraficaCuentaAnomaliasM(){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT tipo, COUNT(*) AS cantidad_repeticiones 
            FROM solicitud 
            GROUP BY tipo;
            ");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }
    }
?>