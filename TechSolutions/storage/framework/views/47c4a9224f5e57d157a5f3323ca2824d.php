<div class="min-h-screen bg-gray-50 py-8 px-6 lg:px-10">
    <div class="max-w-full mx-auto space-y-6">
        
        <!-- Cabecera -->
        <div class="flex justify-between items-center bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Gestión de Proyectos</h1>
                <p class="text-sm text-gray-500">Tech Solutions - Panel de Administración</p>
            </div>
            <div class="flex items-center space-x-3">
                <?php if (isset($component)) { $__componentOriginal2a5b84cfe6bbe42072edcbffa38668ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a5b84cfe6bbe42072edcbffa38668ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.action-button','data' => ['onclick' => 'openModalForCreate()','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'openModalForCreate()','variant' => 'primary']); ?>+ Nuevo Proyecto <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a5b84cfe6bbe42072edcbffa38668ba)): ?>
<?php $attributes = $__attributesOriginal2a5b84cfe6bbe42072edcbffa38668ba; ?>
<?php unset($__attributesOriginal2a5b84cfe6bbe42072edcbffa38668ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a5b84cfe6bbe42072edcbffa38668ba)): ?>
<?php $component = $__componentOriginal2a5b84cfe6bbe42072edcbffa38668ba; ?>
<?php unset($__componentOriginal2a5b84cfe6bbe42072edcbffa38668ba); ?>
<?php endif; ?>
                <a href="<?php echo e(route('login')); ?>" onclick="localStorage.removeItem('jwt_token')" class="inline-flex items-center px-4 py-2 border rounded-xl text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Salir</a>
            </div>
        </div>

        <!-- Alertas Dinámicas -->
        <div id="alertContainer"></div>

        <!-- Tabla de Datos -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full table-auto divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-2 py-3 text-left text-xs font-semibold text-gray-500 uppercase">ID</th>
                <th class="px-3 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Nombre</th>
                <th class="px-3 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Responsable</th>
                <th class="px-2 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Estado</th>
                <th class="px-2 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Monto</th>
                <th class="px-3 py-3 text-right text-xs font-semibold text-gray-500 uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody id="projectsTableBody" class="divide-y divide-gray-200 text-sm text-gray-700">
            <!-- Los datos se cargan por JavaScript dinámicamente -->
        </tbody>
    </table>
</div>
    </div>

    <!-- Incluir modal -->
    <?php if (isset($component)) { $__componentOriginalde706e0adc54483ab09e365f4e43426a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde706e0adc54483ab09e365f4e43426a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.project-form-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.project-form-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde706e0adc54483ab09e365f4e43426a)): ?>
<?php $attributes = $__attributesOriginalde706e0adc54483ab09e365f4e43426a; ?>
<?php unset($__attributesOriginalde706e0adc54483ab09e365f4e43426a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde706e0adc54483ab09e365f4e43426a)): ?>
<?php $component = $__componentOriginalde706e0adc54483ab09e365f4e43426a; ?>
<?php unset($__componentOriginalde706e0adc54483ab09e365f4e43426a); ?>
<?php endif; ?>

    <!-- Script de Consumo de API (CRUD completo) -->
    <script>
        const token = localStorage.getItem('jwt_token');
        const apiHeaders = {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        };

        let editingProjectId = null;

        document.addEventListener("DOMContentLoaded", () => {
            fetchProyectos();

            document.getElementById('createProjectForm').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const data = Object.fromEntries(formData.entries());

                let url = '/api/proyectos';
                let method = 'POST';

                if (editingProjectId) {
                    url = `/api/proyectos/${editingProjectId}`;
                    method = 'PUT';
                }

                const res = await fetch(url, {
                    method: method,
                    headers: apiHeaders,
                    body: JSON.stringify(data)
                });

                if (res.status === 201 || res.status === 200) {
                    toggleModal(false);
                    e.target.reset();
                    editingProjectId = null;
                    fetchProyectos();
                    const msg = method === 'POST' 
                        ? 'Proyecto creado exitosamente (Código 201).' 
                        : 'Proyecto actualizado exitosamente (Código 200).';
                    showAlert(msg, 'success');
                } else if (res.status === 404) {
                    showAlert('El proyecto a actualizar no existe (Código 404).', 'error');
                } else {
                    showAlert('Error al procesar la solicitud.', 'error');
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
            <td class="px-2 py-3 font-mono text-xs">${p.id}</td>
            <td class="px-3 py-3 font-medium text-gray-900">${p.nombre}</td>
            <td class="px-3 py-3">${p.responsable ?? ''}</td>
            <td class="px-2 py-3"><span class="px-2 py-0.5 rounded-full text-xs bg-indigo-50 text-indigo-700">${p.estado ?? 'Pendiente'}</span></td>
            <td class="px-2 py-3">$${p.monto ?? 0}</td>
            <td class="px-3 py-3 text-right space-x-1">
                <button onclick="editProyecto(${p.id})" class="text-indigo-600 hover:text-indigo-800 font-medium text-xs">Editar</button>
                <button onclick="deleteProyecto(${p.id})" class="text-red-600 hover:text-red-800 font-medium text-xs">Eliminar</button>
            </td>
        </tr>
    `;
});
            }
        }

        async function editProyecto(id) {
            const res = await fetch(`/api/proyectos/${id}`, { headers: apiHeaders });
            
            if (res.status === 200) {
                const p = await res.json();
                editingProjectId = id;

                const form = document.getElementById('createProjectForm');
                if (form.elements['nombre']) form.elements['nombre'].value = p.nombre || '';
                if (form.elements['responsable']) form.elements['responsable'].value = p.responsable || '';
                if (form.elements['estado']) form.elements['estado'].value = p.estado || '';
                if (form.elements['monto']) form.elements['monto'].value = p.monto || '';
                if (form.elements['descripcion']) form.elements['descripcion'].value = p.descripcion || '';
                if (form.elements['fecha_inicio']) form.elements['fecha_inicio'].value = p.fecha_inicio || '';
                if (form.elements['fecha_fin']) form.elements['fecha_fin'].value = p.fecha_fin || '';

                toggleModal(true);
            } else if (res.status === 404) {
                showAlert('Proyecto no encontrado (Código 404).', 'error');
            }
        }

        function openModalForCreate() {
            editingProjectId = null;
            const form = document.getElementById('createProjectForm');
            if (form) form.reset();
            toggleModal(true);
        }

        async function deleteProyecto(id) {
            if (!confirm('¿Estás seguro de eliminar este proyecto?')) return;

            const res = await fetch(`/api/proyectos/${id}`, {
                method: 'DELETE',
                headers: apiHeaders
            });

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
</div><?php /**PATH C:\Users\matia\OneDrive\TechSolutions\TechSolutions\resources\views/components/organisms/project-dashboard.blade.php ENDPATH**/ ?>