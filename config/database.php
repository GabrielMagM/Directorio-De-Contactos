<?php
class Conexion {
    public static function Conectar() {
        $host       = "localhost";
        $baseDeDatos = 'agenda_db';
        $usuario    = 'root';
        $contrasena = "";

        $con = new PDO("mysql:host=$host;dbname=$baseDeDatos;charset=utf8", $usuario, $contrasena);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }

    
    public static function Desconectar(&$con) {
        $con = null;
    }
}
?>