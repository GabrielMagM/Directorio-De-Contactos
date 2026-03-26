<?php
require_once 'config/database.php';
$mensaje   = '';
$tipo      = '';
$contactos = [];

if (isset($_GET['ok'])) {
    $textos  = ['creado' => 'Contacto guardado.', 'eliminado' => 'Contacto eliminado.'];
    $mensaje = $textos[$_GET['ok']] ?? 'Accion completada.';
    $tipo    = 'ok';
}
if (isset($_GET['error'])) { $mensaje = htmlspecialchars($_GET['error']); $tipo = 'error'; }
$contactos = require 'api/contactos/listar.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="bg-zinc-950 rounded-md border border-neutral-700">
        <?php include 'view/navbar.php'; ?>
        <main class="bg-gray-900 min-h-screen mx-4 rounded-md p-6">

            <?php if ($mensaje && $tipo === 'ok'): ?>
                <div id="mensaje-estado" class="max-w-4xl mx-auto px-4 mb-4">
                    <p class="text-sm text-center py-2 rounded bg-green-100 text-green-700">
                        <?= $mensaje ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php include 'view/formAdd.php'; ?>
            <?php include 'view/contactos.php'; ?>
        </main>
    </div>

    <?php include 'view/modal.php'; ?>
    <script src="js/validaciones.js"></script>
    <script>
        if (window.location.search) {
            window.history.replaceState({}, document.title, window.location.pathname);
        }
        setTimeout(function() {
            const msg = document.getElementById('mensaje-estado');
            if (msg) msg.remove();
        }, 2000);

        <?php if ($tipo === 'error' && $mensaje): ?>
            document.addEventListener('DOMContentLoaded', function() {
                mostrarError('<?= $mensaje ?>');
            });
        <?php endif; ?>
    </script>
    
</body>
</html>