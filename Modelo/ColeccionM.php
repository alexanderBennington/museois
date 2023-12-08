<?php
    require_once "ConexionBD.php";
    class ColeccionM extends ConexionBD{
        static public function NuevoColeccionM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (id, nombre_obra, fecha_adicion, id_zona, id_investigador) VALUES 
                (:id, :nombre_obra, :fecha_adicion, :id_zona, :id_investigador)");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre_obra", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_adicion", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_investigador", $datosC["investigador"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EditarColeccionM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET id = :id, nombre_obra = :nombre_obra, fecha_adicion = :fecha_adicion,
                id_zona = :id_zona, id_investigador = :id_investigador WHERE nombre_obra = :nombre_obra OR id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre_obra", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_adicion", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_zona", $datosC["zona"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_investigador", $datosC["investigador"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EliminarColeccionM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarColeccionM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT c.id, c.nombre_obra, c.fecha_adicion, z.nombre, c.id_investigador 
                FROM coleccion c JOIN zona_museo z ON z.id = c.id_zona ORDER BY z.nombre ASC");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function MostrarColeccionesSelectM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tablaBD ORDER BY nombre_obra");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }
    }
?>