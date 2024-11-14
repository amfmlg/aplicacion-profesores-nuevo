<!-- resources/views/dashboard.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Título del Dashboard -->
    <div class="py-6">
        <h2 class="text-2xl font-semibold text-gray-800">Bienvenido, <?php echo e(Auth::user()->name); ?></h2>
    </div>

    <!-- Lista de Cursos -->
    <div class="mt-4">
        <h3 class="text-lg font-medium">Lista de Cursos</h3>

        <?php if($courses->isNotEmpty()): ?> <!-- Verifica si hay cursos -->
        <table class="min-w-full table-auto border-collapse mt-4">
            <thead>
            <tr>
                <th class="px-4 py-2 border">Nombre</th>
                <th class="px-4 py-2 border">Descripción</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Iterar sobre los cursos -->
            <tr>
                <td class="px-4 py-2 border"><?php echo e($course->name); ?></td>
                <td class="px-4 py-2 border"><?php echo e($course->description); ?></td>
                <td class="px-4 py-2 border">
                    <!-- Acciones -->
                    <a href="<?php echo e(route('courses.edit', $course->id)); ?>" class="text-blue-500">Editar</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No hay cursos disponibles.</p>
        <?php endif; ?>
    </div>


    <div class="mt-8">
        <h3 class="text-lg font-medium">Opciones adicionales</h3>
        <ul class="mt-4 space-y-4">
            <li>
                <a href="<?php echo e(route('profile.show')); ?>" class="text-blue-500">Ver mi perfil</a>
            </li>
            <li>
                <a href="<?php echo e(route('settings')); ?>" class="text-blue-500">Configuración de cuenta</a>
            </li>
            <li>
                <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="text-red-500">Cerrar sesión</button>
                </form>
            </li>
        </ul>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\amfml\Desktop\aplicacion profesores\aplicacion-profesores-nuevo\aplicacion_Profesores-main\resources\views/dashboard.blade.php ENDPATH**/ ?>