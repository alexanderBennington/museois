<?php
    require_once "ConexionBD.php";
    class VisitasM extends ConexionBD{
        static public function NuevoVisitaM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (grupo, fecha_visita, hora_entrada, hora_salida, estado, id_guia, id_monitor) VALUES 
                (:grupo, :fecha_visita, :hora_entrada, :hora_salida, :estado, :id_guia, :id_monitor)");
            $pdo -> bindParam(":grupo", $datosC["grupo"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_visita", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":hora_entrada", $datosC["horae"], PDO::PARAM_STR);
            $pdo -> bindParam(":hora_salida", $datosC["horas"], PDO::PARAM_STR);
            $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_guia", $datosC["guia"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_monitor", $datosC["monitor"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EditarVisitaM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET grupo = :grupo, fecha_visita = :fecha_visita, hora_entrada = :hora_entrada, hora_salida = :hora_salida,
                estado = :estado, id_guia = :id_guia, id_monitor = :id_monitor WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":grupo", $datosC["grupo"], PDO::PARAM_STR);
            $pdo -> bindParam(":fecha_visita", $datosC["fecha"], PDO::PARAM_STR);
            $pdo -> bindParam(":hora_entrada", $datosC["horae"], PDO::PARAM_STR);
            $pdo -> bindParam(":hora_salida", $datosC["horas"], PDO::PARAM_STR);
            $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_guia", $datosC["guia"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_monitor", $datosC["monitor"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EliminarVisitaM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarVisitasM($tablaBD){
            $pdo = ConexionBD::cBD() -> 
            prepare("SELECT v.id, v.grupo, v.fecha_registro, v.fecha_visita, v.hora_entrada, v.hora_salida, v.estado, 
            e1.id as id_emp1, e1.nombre as nombre1, e1.apellido_paterno as app1, e1.apellido_materno as apm1, 
            e2.id as id_emp2, e2.nombre as nombre2, e2.apellido_paterno as app2, e2.apellido_materno as apm2 
            FROM visitas v 
            JOIN empleados e1 ON v.id_guia = e1.id 
            JOIN empleados e2 ON v.id_monitor = e2.id ORDER BY v.id DESC");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }
    }
?>