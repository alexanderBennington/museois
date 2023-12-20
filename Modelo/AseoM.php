<?php
    require_once "ConexionBD.php";
    class AseoM extends ConexionBD{
        static public function agregarAseoM($datosC){
            try {
                $fechaHora = $datosC["fecha"] . ' ' . $datosC["hora"];
                $pdo = ConexionBD::cBD()->prepare("INSERT INTO aseo (fecha, id_zona, id_intendencia) VALUES (:fecha, :id_zona, :id_intendencia)");
                $pdo->bindParam(":fecha", $fechaHora, PDO::PARAM_STR);
                $pdo->bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
                $pdo->bindParam(":id_intendencia", $datosC["encargado"], PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function mostrarAseoM(){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT 
                a.fecha, z.nombre AS zona, e.nombre, e.apellido_paterno, e.apellido_materno 
            FROM 
                aseo a 
                JOIN zona_museo z ON a.id_zona = z.id 
                JOIN empleados e ON a.id_intendencia = e.id 
            ORDER BY 
                fecha DESC
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