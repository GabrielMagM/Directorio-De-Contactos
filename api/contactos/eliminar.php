<?php
require_once '../../config/database.php';
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header("Location: /SenacytPrueba/index.php");
    exit();
}

$id = intval($_GET['id'] ?? 0);

if ($id <= 0) {
    header("Location: /SenacytPrueba/index.php?error=ID+no+válido");
    exit();
}

try {
    $conn = Conexion::Conectar();

    $stmt = $conn->prepare("DELETE FROM contactos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    Conexion::Desconectar($conn);
    header("Location: /SenacytPrueba/index.php?ok=eliminado");
    exit();

} catch (PDOException $e) {
    Conexion::Desconectar($conn);
    header("Location: /SenacytPrueba/index.php?error=" . urlencode($e->getMessage()));
    exit();
}
?>