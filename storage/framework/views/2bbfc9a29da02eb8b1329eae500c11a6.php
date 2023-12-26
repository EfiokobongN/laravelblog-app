<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['active', 'navigate']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['active', 'navigate']); ?>
<?php foreach (array_filter((['active', 'navigate']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = $active ?? false ? 'inline-flex items-center hover:text-yellow-900 text-sm text-yellow-500' : 'inline-flex items-center hover:text-yellow-900 text-sm text-gray-500';
?>

<a <?php echo e($navigate ?? true ? 'wire:navigate' : ''); ?> <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</a><?php /**PATH C:\xampp\htdocs\laravelblog-app\resources\views/components/nav-link.blade.php ENDPATH**/ ?>