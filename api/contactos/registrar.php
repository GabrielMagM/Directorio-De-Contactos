<?php
require_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /SenacytPrueba/index.php");
    exit();
}

$nombre   = trim($_POST['nombre']   ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$email    = trim($_POST['email']    ?? '');

// Validaciones
if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombre)) {
    header("Location: /SenacytPrueba/index.php?error=El+nombre+solo+puede+contener+letras");
    exit();
}
if (!preg_match('/^6\d{3}-\d{4}$/', $telefono)) {
    header("Location: /SenacytPrueba/index.php?error=El+telefono+debe+tener+formato+6XXX-XXXX");
    exit();
}
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /SenacytPrueba/index.php?error=El+correo+no+es+valido");
    exit();
}

if (empty($nombre) || empty($telefono)) {
    header("Location: /SenacytPrueba/index.php?error=Nombre+y+telefono+son+obligatorios");
    exit();
}

try {
    $conn = Conexion::Conectar();

    if (!empty($email)) {
        $check = $conn->prepare("SELECT COUNT(*) FROM contactos WHERE email = :email");
        $check->execute([':email' => $email]);
        if ($check->fetchColumn() > 0) {
            Conexion::Desconectar($conn);
            header("Location: /SenacytPrueba/index.php?error=El+correo+ya+está+en+uso");
            exit();
        }
    }

    $check2 = $conn->prepare("SELECT COUNT(*) FROM contactos WHERE telefono = :telefono");
    $check2->execute([':telefono' => $telefono]);
    if ($check2->fetchColumn() > 0) {
        Conexion::Desconectar($conn);
        header("Location: /SenacytPrueba/index.php?error=El+teléfono+ya+está+en+uso");
        exit();
    }

    $sql  = "INSERT INTO contactos (nombre, telefono, email) VALUES (:nombre, :telefono, :email)";
    $stmt = $conn->prepare($sql);

    $stmt->execute([':nombre'   => $nombre, ':telefono' => $telefono, ':email'    => $email ?: null]);

    Conexion::Desconectar($conn);
    header("Location: /SenacytPrueba/index.php?ok=creado");
    exit();

} catch (PDOException $e) {
    Conexion::Desconectar($conn);
    header("Location: /SenacytPrueba/index.php?error=" . urlencode($e->getMessage()));
    exit();
}
?>