<?php
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost:3306;dbname=wedding","Soporte3b","Soporte3b");
            $link -> exec ("set names utf8");
            return $link;
        }
    }
?>