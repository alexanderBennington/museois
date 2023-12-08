<?php
    require_once "ConexionBD.php";
    class SolicitudM extends ConexionBD{
        static public function NuevoSolicitudM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (id_articulo, detalles, estado, id_encargado) VALUES 
                (:id_articulo, :detalles, :estado, :id_encargado)");
            $pdo -> bindParam(":id_articulo", $datosC["id_articulo"], PDO::PARAM_STR);
            $pdo -> bindParam(":detalles", $datosC["detalles"], PDO::PARAM_STR);
            $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
            $pdo -> bindParam(":id_encargado", $datosC["id_encargado"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }
    }
?>