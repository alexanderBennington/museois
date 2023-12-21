<?php
    require_once "ConexionBD.php";
    class EquiposM extends ConexionBD{
        static public function agregarEquipoM($datosC){
            try {
                $pdo = ConexionBD::cBD()->prepare("INSERT INTO informatica (nombre, dispositivo, dir_ip, id_zona) VALUES (:nombre, :dispositivo, :dir_ip, :id_zona)");
                $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
                $pdo->bindParam(":dispositivo", $datosC["dispositivo"], PDO::PARAM_STR);
                $pdo->bindParam(":dir_ip", $datosC["ip"], PDO::PARAM_STR);
                $pdo->bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function editarEquipoM($datosC){
            try {
                $pdo = ConexionBD::cBD()->prepare("UPDATE informatica SET nombre = :nombre, dispositivo = :dispositivo, dir_ip = :dir_ip, id_zona = :id_zona 
                    WHERE id_ns = :id_ns");
                $pdo->bindParam(":id_ns", $datosC["id"], PDO::PARAM_STR);
                $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
                $pdo->bindParam(":dispositivo", $datosC["dispositivo"], PDO::PARAM_STR);
                $pdo->bindParam(":dir_ip", $datosC["ip"], PDO::PARAM_STR);
                $pdo->bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function eliminarEquipoM($id){
            try {
                $pdo = ConexionBD::cBD()->prepare("DELETE FROM informatica WHERE id_ns = :id_ns");
                $pdo->bindParam(":id_ns", $id, PDO::PARAM_INT);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function mostrarEquiposM(){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT i.id_ns, i.nombre, i.dispositivo, i.dir_ip, z.nombre AS zona FROM informatica i JOIN zona_museo z ON i.id_zona = z.id ORDER BY i.id_ns ASC
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
    }
?>