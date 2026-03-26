// js/validaciones.js

function mostrarError(msg) {
    document.getElementById('modal-mensaje').textContent = msg;
    const modal = document.getElementById('modal-error');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function cerrarModal() {
    const modal = document.getElementById('modal-error');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function confirmarEliminar(url) {
    document.getElementById('confirmar-link').href = url;
    const modal = document.getElementById('modal-confirmar');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function cerrarConfirmar() {
    const modal = document.getElementById('modal-confirmar');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function validarFormulario() {
    const nombre   = document.getElementById('campo-nombre').value.trim();
    const telefono = document.getElementById('campo-telefono').value.trim();
    const email    = document.getElementById('campo-email').value.trim();

    const valNombre   = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
    const valTelefono = /^6\d{3}-\d{4}$/;
    const valEmail    = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (nombre === '') {
        mostrarError('El nombre es obligatorio.');
        document.getElementById('campo-nombre').focus();
        return false;
    }
    if (!valNombre.test(nombre)) {
        mostrarError('El nombre solo puede contener letras.');
        document.getElementById('campo-nombre').focus();
        return false;
    }
    if (telefono === '') {
        mostrarError('El teléfono es obligatorio.');
        document.getElementById('campo-telefono').focus();
        return false;
    }
    if (!valTelefono.test(telefono)) {
        mostrarError('El teléfono debe tener el formato 6XXX-XXXX.');
        document.getElementById('campo-telefono').focus();
        return false;
    }
    if (email === '') {
        mostrarError('El correo es obligatorio.');
        document.getElementById('campo-email').focus();
        return false;
    }
    if (!valEmail.test(email)) {
        mostrarError('El correo no tiene un formato válido.');
        document.getElementById('campo-email').focus();
        return false;
    }
    return true;
}