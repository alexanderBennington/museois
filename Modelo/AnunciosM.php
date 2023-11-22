<?php
    require_once "ConexionBD.php";
    class AnunciosM extends ConexionBD{
        static public function NuevoAnuncioM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("INSERT INTO $tablaBD (titulo, subtitulo, contenido, imagen, dato1, dato2, dato3, dato4, estado) VALUES 
                (:titulo, :subtitulo, :contenido, :imagen, :dato1, :dato2, :dato3, :dato4, :estado)");
            $pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
            $pdo -> bindParam(":subtitulo", $datosC["subtitulo"], PDO::PARAM_STR);
            $pdo -> bindParam(":contenido", $datosC["contenido"], PDO::PARAM_STR);
            $pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato1", $datosC["dato1"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato2", $datosC["dato2"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato3", $datosC["dato3"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato4", $datosC["dato4"], PDO::PARAM_STR);
            $pdo -> bindParam(":estado", $datosC["publicado"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EditarAnuncioM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("UPDATE $tablaBD SET id = :id, titulo = :titulo, subtitulo = :subtitulo, contenido = :contenido, 
                imagen = :imagen, dato1 = :dato1, dato2 = :dato2, dato3 = :dato3, dato4 = :dato4, estado = :estado WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
            $pdo -> bindParam(":subtitulo", $datosC["subtitulo"], PDO::PARAM_STR);
            $pdo -> bindParam(":contenido", $datosC["contenido"], PDO::PARAM_STR);
            $pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato1", $datosC["dato1"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato2", $datosC["dato2"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato3", $datosC["dato3"], PDO::PARAM_STR);
            $pdo -> bindParam(":dato4", $datosC["dato4"], PDO::PARAM_STR);
            $pdo -> bindParam(":estado", $datosC["publicado"], PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function EliminarAnuncioM($datosC, $tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "error";
            }
            $pdo -> close();
        }

        static public function MostrarAnunciosM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tablaBD ");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }

        static public function MostrarAnunciosPublicoM($tablaBD){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tablaBD where estado = 'SI'");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close(); 
        }
    }
?>