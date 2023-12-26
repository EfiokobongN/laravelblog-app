<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Home Page']); ?>
    <?php $__env->startSection('hero'); ?>
        <div class="w-full py-32 text-center image">
            <h1 class="text-2xl font-bold text-center text-black md:text-3xl lg:text-5xl">
                Welcome to <span class="text-yellow-500">&lt;TECHde&gt;</span> <span class="text-gray-900"> vOps</span>
            </h1>
            <p class="mt-1 text-lg text-gray-500 font-bold">Best Blog in the universe</p>
            <a class="inline-block px-3 py-2 mt-5 text-lg text-white bg-gray-800 rounded"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    <?php $__env->stopSection(); ?>

    <div class="w-full mb-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl font-bold text-yellow-500">Featured Posts</h2>
            <div class="w-full">
                <div class="grid w-full grid-cols-3 gap-10">
                    <?php $__currentLoopData = $featuredPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal5df616693ca14c1110112a7a3a670b1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5df616693ca14c1110112a7a3a670b1e = $attributes; } ?>
<?php $component = App\View\Components\Posts\PostCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('posts.post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Posts\PostCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post),'class' => 'col-span-3 md:col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5df616693ca14c1110112a7a3a670b1e)): ?>
<?php $attributes = $__attributesOriginal5df616693ca14c1110112a7a3a670b1e; ?>
<?php unset($__attributesOriginal5df616693ca14c1110112a7a3a670b1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5df616693ca14c1110112a7a3a670b1e)): ?>
<?php $component = $__componentOriginal5df616693ca14c1110112a7a3a670b1e; ?>
<?php unset($__componentOriginal5df616693ca14c1110112a7a3a670b1e); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <a class="block mt-10 text-lg font-semibold text-center text-yellow-500"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl font-bold text-yellow-500">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid w-full grid-cols-3 gap-10">
                <?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal5df616693ca14c1110112a7a3a670b1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5df616693ca14c1110112a7a3a670b1e = $attributes; } ?>
<?php $component = App\View\Components\Posts\PostCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('posts.post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Posts\PostCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post),'class' => 'col-span-3 md:col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5df616693ca14c1110112a7a3a670b1e)): ?>
<?php $attributes = $__attributesOriginal5df616693ca14c1110112a7a3a670b1e; ?>
<?php unset($__attributesOriginal5df616693ca14c1110112a7a3a670b1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5df616693ca14c1110112a7a3a670b1e)): ?>
<?php $component = $__componentOriginal5df616693ca14c1110112a7a3a670b1e; ?>
<?php unset($__componentOriginal5df616693ca14c1110112a7a3a670b1e); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <a class="block mt-10 text-lg font-semibold text-center text-yellow-500" href="http://127.0.0.1:8000/blog">More
            Posts</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravelblog-app\resources\views/home.blade.php ENDPATH**/ ?>