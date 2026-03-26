<?php ?>
<div class="max-w-4xl mx-auto mb-10 px-4">
    <section class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
        <h2 class="font-bold text-gray-800 text-lg mb-4">Mis Contactos</h2>

        <?php if (empty($contactos)): ?>
            <p class="text-sm text-gray-400 text-center py-6">No tienes contactos registrados aún.</p>
        <?php else: ?>
            <!-- en Pantalla -->
            <div class="hidden sm:block overflow-x-auto max-h-96 overflow-y-auto">
                <table class="w-full text-sm text-gray-700">
                    <thead class="sticky top-0 bg-white z-10">
                        <tr class="border-b border-gray-200 text-gray-500 text-xs uppercase tracking-wide">
                            <th class="text-left py-2 pr-4 font-semibold">Nombre</th>
                            <th class="text-left py-2 pr-4 font-semibold">Teléfono</th>
                            <th class="text-left py-2 pr-4 font-semibold">Correo</th>
                            <th class="text-center py-2 font-semibold">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($c = current($contactos)): next($contactos); ?>
                        <tr class="border-b border-gray-100 hover:bg-orange-50 transition-colors">
                            <td class="py-3 pr-4 font-medium text-gray-800"><?= htmlspecialchars($c['nombre']) ?></td>
                            <td class="py-3 pr-4 text-gray-600"><?= htmlspecialchars($c['telefono']) ?></td>
                            <td class="py-3 pr-4 text-gray-500"><?= htmlspecialchars($c['email'] ?: '—') ?></td>
                            <td class="py-3">
                                <div class="flex items-center justify-center">
                                    <a href="#"
                                    onclick="confirmarEliminar('api/contactos/eliminar.php?id=<?= $c['id'] ?>'); return false;"
                                    class="text-xs bg-gray-900 hover:bg-red-700 text-white px-3 py-1.5 rounded transition-colors">
                                        Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Vista Pequeña -->
            <?php reset($contactos); ?>
            <div class="sm:hidden flex flex-col gap-3 max-h-96 overflow-y-auto">
                <?php while ($c = current($contactos)): next($contactos); ?>
                <div class="border border-gray-200 rounded-lg p-4 hover:border-orange-300 transition-colors">
                    <div class="flex justify-between gap-4">
                        <div>
                            <p class="font-semibold text-gray-800 text-sm">
                                <?= htmlspecialchars($c['nombre']) ?>
                            </p>
                            <p class="text-sm text-gray-600 mt-0.5">
                                <?= htmlspecialchars($c['telefono']) ?>
                            </p>
                            <?php if (!empty($c['email'])): ?>
                                <p class="text-xs text-gray-400 mt-0.5">
                                    <?= htmlspecialchars($c['email']) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="flex items-center justify-center p-2">
                            <a href="#"
                            onclick="confirmarEliminar('api/contactos/eliminar.php?id=<?= $c['id'] ?>'); return false;"
                            class="text-xs bg-gray-900 hover:bg-orange-500 text-white px-3 py-1.5 rounded transition-colors">
                                Eliminar
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
</div>