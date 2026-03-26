<!-- Modal de éxito -->
    <div id="modal-ok" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm w-full mx-4">
            <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl"></span>
                <h3 class="font-bold text-gray-800">Listo</h3>
            </div>
            <p id="modal-ok-mensaje" class="text-sm text-gray-600 mb-5"></p>
            <button onclick="cerrarModalOk()"
                class="w-full bg-gray-900 hover:bg-orange-500 text-white py-2 rounded text-sm font-medium transition-colors">
                Aceptar
            </button>
        </div>
    </div>

    <!-- Modal de error -->
    <div id="modal-error" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm w-full mx-4">
            <div class="flex items-center gap-3 mb-3">
                <span class="text-red-500 text-2xl"></span>
                <h3 class="font-bold text-gray-800">Atención</h3>
            </div>
            <p id="modal-mensaje" class="text-sm text-gray-600 mb-5"></p>
            <button onclick="cerrarModal()"
                class="w-full bg-gray-900 hover:bg-orange-500 text-white py-2 rounded text-sm font-medium transition-colors">
                Entendido
            </button>
        </div>
    </div>

    <!-- Modal de confirmación para eliminar -->
    <div id="modal-confirmar" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm w-full mx-4">
            <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl"></span>
                <h3 class="font-bold text-gray-800">Eliminar contacto</h3>
            </div>
            <p class="text-sm text-gray-600 mb-5">¿Estás seguro que deseas eliminar este contacto? Esta acción no se puede deshacer.</p>
            <div class="flex gap-3">
                <button onclick="cerrarConfirmar()"
                    class="flex-1 border border-gray-300 hover:bg-gray-100 text-gray-700 py-2 rounded text-sm font-medium transition-colors">
                    Cancelar
                </button>
                <a id="confirmar-link" href="#"
                    class="flex-1 text-center bg-red-600 hover:bg-red-700 text-white py-2 rounded text-sm font-medium transition-colors">
                    Sí, eliminar
                </a>
            </div>
        </div>
    </div>