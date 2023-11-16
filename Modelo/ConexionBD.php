<?php
    class ConexionBD{
        static public function cBD(){
            try{
                $bd = new PDO("mysql:host=localhost;dbname=museum", "root", "");
                return $bd;
            } catch(PDOException $e){
                die('Connected failed: '.$e->getMessage());
            }
        }
    }
?>