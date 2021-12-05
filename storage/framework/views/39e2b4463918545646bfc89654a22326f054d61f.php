<?php $__env->startSection('content'); ?>
    <h2 class="text-5xl mb-12">Добавить продукт</h2>

    <form action="<?php echo e(route('admin.add-product')); ?>" method="POST" class="w-3/4" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="block mb-2">Название</label>
            <input type="text" name="name" class="border w-full p-1">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Категория</label>
            <select name="category" class="border w-full p-1">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category['name']); ?>"><?php echo e($category['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Описание</label>
            <textarea name="description" class="w-full"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Цена (в рублях)</label>
            <input type="number" name="price" class="border w-full p-1">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Изображения</label>
            <input type="file" name="image[]" multiple class="border w-full p-1">
        </div>

        <button class="bg-gray-700 hover:bg-gray-800 text-white w-full p-2">Добавить</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\image\resources\views/admin/add-product.blade.php ENDPATH**/ ?>