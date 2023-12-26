<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes); ?>>
    <a wire:navigate href="<?php echo e(route('posts.show', $post->slug)); ?>">
        <div>
            <img class="w-full h-60 rounded-xl" src="<?php echo e($post->getThumbnailUrl()); ?>">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            <?php if($category = $post->categories()->first()): ?>
                <?php if (isset($component)) { $__componentOriginal5571ae9030ac11cbd44686094e5e3cdc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.category-badge','data' => ['category' => $category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('posts.category-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc)): ?>
<?php $attributes = $__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc; ?>
<?php unset($__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5571ae9030ac11cbd44686094e5e3cdc)): ?>
<?php $component = $__componentOriginal5571ae9030ac11cbd44686094e5e3cdc; ?>
<?php unset($__componentOriginal5571ae9030ac11cbd44686094e5e3cdc); ?>
<?php endif; ?>
            <?php endif; ?>
            <p class="text-sm text-gray-500"><?php echo e($post->published_at); ?></p>
        </div>
        <a wire:navigate href="<?php echo e(route('posts.show', $post->slug)); ?>"
            class="text-xl font-bold text-gray-900"><?php echo e($post->title); ?></a>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravelblog-app\resources\views/components/posts/post-card.blade.php ENDPATH**/ ?>