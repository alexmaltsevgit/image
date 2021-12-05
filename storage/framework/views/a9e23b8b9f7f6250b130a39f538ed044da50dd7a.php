<?php $attributes = $attributes->exceptProps(['categories']); ?>
<?php foreach (array_filter((['categories']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<nav class="swiper" id="navigation">
    <ul class="swiper-wrapper py-4">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="swiper-slide w-auto">
                <a href="<?php echo e('/' . $category->id); ?>" class="text-3xl hover:text-gray-600 transition-colors">
                    <?php echo e(__($category->name)); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\image\resources\views/components/navigation.blade.php ENDPATH**/ ?>