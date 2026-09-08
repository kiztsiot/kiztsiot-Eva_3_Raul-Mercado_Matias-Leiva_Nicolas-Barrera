<div id="projectModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center px-4 z-50">
    <div class="bg-white rounded-2xl shadow-xl max-w-lg w-full p-6 space-y-4">
        <div class="flex justify-between items-center border-b pb-3">
            <h3 class="text-lg font-bold text-gray-900">Nuevo Proyecto</h3>
            <button onclick="toggleModal(false)" class="text-gray-400 hover:text-gray-600">&times;</button>
        </div>

        <form id="createProjectForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre del Proyecto</label>
                <input type="text" name="nombre" required class="w-full px-4 py-2 border rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Fecha de Inicio</label>
                    <input type="date" name="fecha_inicio" required class="w-full px-4 py-2 border rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                    <select name="estado" required class="w-full px-4 py-2 border rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        <option value="En curso">En curso</option>
                        <option value="Completado">Completado</option>
                        <option value="Pendiente">Pendiente</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Responsable</label>
                    <input type="text" name="responsable" required class="w-full px-4 py-2 border rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Monto ($)</label>
                    <input type="number" step="0.01" name="monto" required class="w-full px-4 py-2 border rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                </div>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t">
                <x-atoms.action-button type="button" variant="secondary" onclick="toggleModal(false)">Cancelar</x-atoms.action-button>
                <x-atoms.action-button type="submit" variant="primary">Guardar Proyecto</x-atoms.action-button>
            </div>
        </form>
    </div>
</div>