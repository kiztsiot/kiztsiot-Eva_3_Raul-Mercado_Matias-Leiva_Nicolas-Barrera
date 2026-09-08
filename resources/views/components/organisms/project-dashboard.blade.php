<div class="min-h-screen bg-gray-50 py-8 px-6 lg:px-10">
    <div class="max-w-full mx-auto space-y-6">
        
        <!-- Cabecera -->
        <div class="flex justify-between items-center bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Gestión de Proyectos</h1>
                <p class="text-sm text-gray-500">Tech Solutions - Panel de Administración</p>
            </div>
            <div class="flex items-center space-x-3">
                <x-atoms.action-button onclick="toggleModal(true)" variant="primary">+ Nuevo Proyecto</x-atoms.action-button>
                <a href="{{ route('login') }}" onclick="localStorage.removeItem('jwt_token')" class="inline-flex items-center px-4 py-2 border rounded-xl text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Salir</a>
            </div>
        </div>

        <!-- Alertas Dinámicas -->
        <div id="alertContainer"></div>

        <!-- Tabla de Datos -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Responsable</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Estado</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Monto</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody id="projectsTableBody" class="divide-y divide-gray-200 text-sm text-gray-700">
                    <!-- Los datos se cargan por JavaScript dinámicamente -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Incluir modal -->
    <x-molecules.project-form-modal />

    <!-- Script de Consumo de API (CRUD completo) -->
    <script>
        const token = localStorage.getItem('jwt_token');
        const apiHeaders = {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        };

        document.addEventListener("DOMContentLoaded", () => {
            fetchProyectos();

            document.getElementById('createProjectForm').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const data = Object.fromEntries(formData.entries());

                const res = await fetch('/api/proyectos', {
                    method: 'POST',
                    headers: apiHeaders,
                    body: JSON.stringify(data)
                });

                if (res.status === 201) {
                    toggleModal(false);
                    e.target.reset();
                    fetchProyectos();
                    showAlert('Proyecto creado exitosamente (Código 201).', 'success');
                } else {
                    const errData = await res.json();
                    showAlert('Error al validar datos.', 'error');
                }
            });
        });

        async function fetchProyectos() {
            const res = await fetch('/api/proyectos', { headers: apiHeaders });
            if (res.status === 200) {
                const proyectos = await res.json();
                const tbody = document.getElementById('projectsTableBody');
                tbody.innerHTML = '';

                if (proyectos.length === 0) {
                    tbody.innerHTML = `<tr><td colspan="6" class="px-6 py-6 text-center text-gray-400">No hay registros en la base de datos (Arreglo vacío).</td></tr>`;
                    return;
                }

                proyectos.forEach(p => {
                    tbody.innerHTML += `
                        <tr>
                            <td class="px-6 py-4 font-mono text-xs">${p.id}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">${p.nombre}</td>
                            <td class="px-6 py-4">${p.responsable}</td>
                            <td class="px-6 py-4"><span class="px-2.5 py-0.5 rounded-full text-xs bg-indigo-50 text-indigo-700">${p.estado}</span></td>
                            <td class="px-6 py-4">$${p.monto}</td>
                            <td class="px-6 py-4 text-right">
                                <button onclick="deleteProyecto(${p.id})" class="text-red-600 hover:text-red-800 font-medium text-xs">Eliminar</button>
                            </td>
                        </tr>
                    `;
                });
            }
        }

        async function deleteProyecto(id) {
            if (!confirm('¿Estás seguro de eliminar este proyecto?')) return;

            const res = await fetch(`/api/proyectos/${id}`, {
                method: 'DELETE',
                headers: apiHeaders
            });

            // Código 204 indica éxito estricto sin contenido según la pauta
            if (res.status === 204) {
                fetchProyectos();
                showAlert('Proyecto eliminado correctamente (Código 204).', 'success');
            } else if (res.status === 404) {
                showAlert('El ID del proyecto no existe (Código 404).', 'error');
            }
        }

        function toggleModal(show) {
            const modal = document.getElementById('projectModal');
            if (show) modal.classList.remove('hidden');
            else modal.classList.add('hidden');
        }

        function showAlert(message, type) {
            const container = document.getElementById('alertContainer');
            const color = type === 'success' ? 'bg-green-50 text-green-800 border-green-200' : 'bg-red-50 text-red-800 border-red-200';
            container.innerHTML = `<div class="p-4 rounded-xl border text-sm ${color}">${message}</div>`;
            setTimeout(() => container.innerHTML = '', 4000);
        }
    </script>
</div>