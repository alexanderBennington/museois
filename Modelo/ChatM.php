<?php
    require_once "ConexionBD.php";
    class ChatM extends ConexionBD{
        static public function EnviarMensajeChatM($de_id, $para_id, $mensaje){
            try {
                $pdo = ConexionBD::cBD()->prepare("INSERT INTO mensajes (de_usuario_id, para_usuario_id, mensaje) VALUES (:de_usuario_id, :para_usuario_id, :mensaje)");
                $pdo->bindParam(":de_usuario_id", $de_id, PDO::PARAM_STR);
                $pdo->bindParam(":para_usuario_id", $para_id, PDO::PARAM_STR);
                $pdo->bindParam(":mensaje", $mensaje, PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function EnviarMensajeChatGeneralM($id, $mensaje){
            try {
                $pdo = ConexionBD::cBD()->prepare("INSERT INTO mensajes_general (id_usuario, mensaje) VALUES (:id_usuario, :mensaje)");
                $pdo->bindParam(":id_usuario", $id, PDO::PARAM_STR);
                $pdo->bindParam(":mensaje", $mensaje, PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return "Bien";
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function MostrarChatM($id){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT
                a.id AS id,
                a.nombre AS nombre,
                a.apellido_paterno AS apellido_paterno,
                a.apellido_materno AS apellido_materno,
                a.area AS area,
                e.id AS idemp,
                e.nombre AS nombreemp,
                e.apellido_paterno AS appemp,
                e.apellido_materno AS apmemp,
                e.tipo AS tipo,
                m.mensaje AS mensaje,
                m.fecha_envio AS fecha_envio
            FROM
                administracion a
                JOIN mensajes m ON m.de_usuario_id = a.id
                JOIN empleados e ON m.para_usuario_id = e.id
            WHERE
                a.id = :id1 AND e.id = :id2
            
            UNION
            
            SELECT
                e.id AS id,
                e.nombre AS nombre,
                e.apellido_paterno AS apellido_paterno,
                e.apellido_materno AS apellido_materno,
                e.tipo AS area,
                a.id AS idemp,
                a.nombre AS nombreemp,
                a.apellido_paterno AS appemp,
                a.apellido_materno AS apmemp,
                a.area AS tipo,
                m.mensaje AS mensaje,
                m.fecha_envio AS fecha_envio
            FROM
                empleados e
                JOIN mensajes m ON m.de_usuario_id = e.id
                JOIN administracion a ON m.para_usuario_id = a.id
            WHERE
                e.id = :id2 AND a.id = :id1
                
            ORDER BY
                fecha_envio ASC
            
                ");
                $pdo->bindParam(":id1", $_SESSION["id"], PDO::PARAM_STR);
                $pdo->bindParam(":id2", $id, PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return $pdo -> fetchAll();
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }

        static public function MostrarChatGeneralM(){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT 
                e.id, e.nombre, e.apellido_paterno, e.apellido_materno, 
                e.tipo as area, m.mensaje, m.fecha_envio 
            FROM 
                mensajes_general m 
                JOIN empleados e ON e.id = m.id_usuario
                
            UNION
                
            SELECT 
                a.id, a.nombre, a.apellido_paterno, a.apellido_materno, a.area, m.mensaje, m.fecha_envio
            FROM 
                mensajes_general m 
                JOIN administracion a ON a.id = m.id_usuario
            ORDER BY 
                fecha_envio ASC
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

        //EMpleados

        static public function MostrarChatEmpleadosM($id){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT
                em.id AS id,
                em.nombre AS nombre,
                em.apellido_paterno AS apellido_paterno,
                em.apellido_materno AS apellido_materno,
                em.tipo AS area,
                e.id AS idemp,
                e.nombre AS nombreemp,
                e.apellido_paterno AS appemp,
                e.apellido_materno AS apmemp,
                e.tipo AS tipo,
                m.mensaje AS mensaje,
                m.fecha_envio AS fecha_envio
            FROM
                empleados em
                JOIN mensajes m ON m.de_usuario_id = em.id
                JOIN empleados e ON m.para_usuario_id = e.id
            WHERE
                em.id = :id1 AND e.id = :id2
            
            UNION
            
            SELECT
                e.id AS id,
                e.nombre AS nombre,
                e.apellido_paterno AS apellido_paterno,
                e.apellido_materno AS apellido_materno,
                e.tipo AS area,
                em.id AS idemp,
                em.nombre AS nombreemp,
                em.apellido_paterno AS appemp,
                em.apellido_materno AS apmemp,
                em.tipo AS tipo,
                m.mensaje AS mensaje,
                m.fecha_envio AS fecha_envio
            FROM
                empleados e
                JOIN mensajes m ON m.de_usuario_id = e.id
                JOIN empleados em ON m.para_usuario_id = em.id
            WHERE
                e.id = :id2 AND em.id = :id1
                
            ORDER BY
                fecha_envio ASC
            
                ");
                $pdo->bindParam(":id1", $_SESSION["id"], PDO::PARAM_STR);
                $pdo->bindParam(":id2", $id, PDO::PARAM_STR);
                if ($pdo->execute()) {
                    return $pdo -> fetchAll();
                } else {
                    return "Error al ejecutar la consulta";
                }
            } catch (PDOException $e) {
                return "Error en la conexión a la base de datos: " . $e->getMessage();
            }
        }
        
        static public function MostrarChatEmpleadosAdminsM($id){
            try {
                $pdo = ConexionBD::cBD() -> 
                prepare("SELECT
                a.id AS id,
                a.nombre AS nombre,
                a.apellido_paterno AS apellido_paterno,
                a.apellido_materno AS apellido_materno,
                a.area AS area,
                e.id AS idemp,
                e.nombre AS nombreemp,
                e.apellido_paterno AS appemp,
                e.apellido_materno AS apmemp,
                e.tipo AS tipo,
                m.mensaje AS mensaje,
                m.fecha_envio AS fecha_envio
            FROM
                administracion a
                JOIN mensajes m ON m.de_usuario_id = a.id
                JOIN empleados e ON m.para_usuario_id = e.id
            WHERE
                a.id = :id1 AND e.id = :id2
            
            UNION
            
            SELECT
                e.id AS id,
                e.nombre AS nombre,
                e.apellido_paterno AS apellido_paterno,
                e.apellido_materno AS apellido_materno,
                e.tipo AS area,
                a.id AS idemp,
                a.nombre AS nombreemp,
                a.apellido_paterno AS appemp,
                a.apellido_materno AS apmemp,
                a.area AS tipo,
                m.mensaje AS mensaje,
                m.fecha_envio AS fecha_envio
            FROM
                empleados e
                JOIN mensajes m ON m.de_usuario_id = e.id
                JOIN administracion a ON m.para_usuario_id = a.id
            WHERE
                e.id = :id2 AND a.id = :id1
                
            ORDER BY
                fecha_envio ASC
            
                ");
                $pdo->bindParam(":id1", $id, PDO::PARAM_STR);
                $pdo->bindParam(":id2", $_SESSION["id"], PDO::PARAM_STR);
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