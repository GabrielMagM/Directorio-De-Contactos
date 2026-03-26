<?php
require_once 'database.php';

try {
    $conn = Conexion::Conectar();
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>