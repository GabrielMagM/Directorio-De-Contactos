<?php ?>
<div class="mb-2 flex items-center justify-center">
        <p class="text-sm text-gray-400 mt-2 font-extrabold">Puedes Agregar, consultar y eliminar tus contactos.</p>
</div>
<div class="max-w-4xl mx-auto mt-8 mb-6 px-4">
    <section class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
        <h2 class="font-bold text-gray-800 text-lg mb-4">Nuevo Contacto</h2>
        <form action="api/contactos/registrar.php" method="POST" onsubmit="return validarFormulario()">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Nombre *</label>
                    <input type="text" name="nombre" id="campo-nombre" placeholder="Ej: Ana García"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Teléfono *</label>
                    <input type="text" name="telefono" id="campo-telefono" placeholder="Ej: 6000-0000"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-sm text-gray-600 mb-1">Correo</label>
                <input type="email" name="email" id="campo-email" placeholder="Ej: ana@correo.com"
                class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
            </div>

            <button type="submit"
                class="w-full bg-gray-900 hover:bg-orange-500 text-white py-2 rounded text-sm font-medium">
                + Guardar Contacto
            </button>
        </form>
    </section>
</div>