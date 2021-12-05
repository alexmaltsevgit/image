<?php $__env->startSection('content'); ?>
    <h2 class="text-5xl mb-12">Добавить категорию</h2>

    <form action="<?php echo e(route('admin.add-category')); ?>" method="POST" class="w-64">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="block mb-2">Название</label>
            <input type="text" name="name" class="border w-full p-1">
        </div>

        <button class="bg-gray-700 hover:bg-gray-800 text-white w-full p-2">Добавить</button>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\image\resources\views/admin/add-category.blade.php ENDPATH**/ ?>