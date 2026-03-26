<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/SenacytPrueba/config/database.php';

$contactos = [];

try {
    $conn      = Conexion::Conectar();
    $stmt      = $conn->query("SELECT id, nombre, telefono, email FROM contactos ORDER BY nombre ASC");
    $contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    Conexion::Desconectar($conn);
} catch (PDOException $e) {
    $contactos = [];
}

return $contactos;