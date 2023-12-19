<?php
    require_once "ConexionBD.php";
    class SolicitudM extends ConexionBD{
        static public function NuevoSolicitudM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (id_articulo, detalles, estado, id_encargado, tipo) VALUES 
                (:id_articulo, :detalles, :estado, :id_encargado, :tipo)");
            $pdo -> bindParam(":id_articulo", $datosC["id_articulo"], PDO::PARAM_STR);
            $pdo -> bindParam(":detalles", $datosC["detalles"], PDO::PARAM_STR);
            $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_encargado", $datosC["id_encargado"], PDO::PARAM_STR);
            $pdo -> bindParam(":tipo", $datosC["tipo"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarSolicitudM($tablaBD){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT s.id, c.nombre_obra, s.fecha, s.detalles, s.estado, s.tipo, e.nombre, e.apellido_paterno, e.apellido_materno 
                FROM coleccion c JOIN solicitud s ON s.id_articulo = c.id 
                JOIN empleados e ON e.id = s.id_encargado WHERE s.estado = 'PENDIENTE' ORDER BY s.id DESC");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function AprobarSolicitudM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET estado = 'APROBADO' WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
        }

        static public function NOAprobarSolicitudM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET estado = 'NO APROBADO' WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
        }

        static public function MostrarSolicitudAprobadaM($tablaBD){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT s.id, c.nombre_obra, s.fecha, s.detalles, s.tipo, e.nombre, e.apellido_paterno, e.apellido_materno 
                FROM coleccion c JOIN solicitud s ON s.id_articulo = c.id 
                JOIN empleados e ON e.id = s.id_encargado WHERE s.estado = 'APROBADO' ORDER BY s.id DESC");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function MostrarDetallesReporteM($tablaBD, $id){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT s.id, s.tipo, c.nombre_obra, e.nombre, e.apellido_paterno, e.apellido_materno 
                FROM coleccion c JOIN solicitud s ON s.id_articulo = c.id 
                JOIN empleados e ON e.id = s.id_encargado WHERE s.id = :id");
            $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo -> fetchAll(); 
        }

        static public function ActualizarSolicitudM($id){
            $pdo = ConexionBD::cBD() -> 
            prepare("UPDATE solicitud SET estado = 'TERMINADO' WHERE id = :id");
            $pdo -> bindParam(":id", $id["id_solicitud"], PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
        }
    }
?>