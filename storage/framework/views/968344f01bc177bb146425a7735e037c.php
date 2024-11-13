<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['active' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<a class="<?php echo e($active ? 'bg-gray-900 text-white': 'w-full bg-blue-500 text-white px-4 py-2 m-1 rounded-md hover:bg-blue-600'); ?> w-full bg-blue-500 text-white px-4 py-2 m-1 rounded-md hover:bg-blue-600"
   aria-current="<?php echo e($active ? 'page': 'false'); ?>"
   <?php echo e($attributes); ?>

><?php echo e($slot); ?></a>
<?php /**PATH C:\xampp\htdocs\dashboard\testing\resources\views/components/nav_menu.blade.php ENDPATH**/ ?>