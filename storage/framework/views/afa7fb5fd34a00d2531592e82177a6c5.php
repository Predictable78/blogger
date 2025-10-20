<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-medium">Welcome back, <?php echo e(auth()->user()->name); ?>!</p>
                    <p class="mt-2 text-sm text-gray-600">Here are the five most recent posts from everyone.</p>
                </div>
            </div>

            <?php $__empty_1 = true; $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article class="bg-white shadow-sm sm:rounded-lg p-6 space-y-2">
                    <header>
                        <h3 class="text-xl font-semibold text-gray-900">
                            <a href="<?php echo e(route('posts.show', $post)); ?>" class="hover:underline">
                                <?php echo e($post->title); ?>

                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">
                            By <?php echo e($post->user->name); ?> • <?php echo e($post->created_at->diffForHumans()); ?>

                        </p>
                    </header>
                    <p class="text-gray-700 whitespace-pre-line">
                        <?php echo e(\Illuminate\Support\Str::limit($post->body, 160)); ?>

                    </p>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-600 text-center">
                    No posts yet. Head over to the <a class="text-blue-600 hover:underline" href="<?php echo e(route('posts.create')); ?>">posts page</a> to write the first one!
                </div>
            <?php endif; ?>

            <div class="text-center">
                <a href="<?php echo e(route('posts.index')); ?>" class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500">
                    View all posts
                </a>
            </div>
        </div>
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
<?php endif; ?>
<?php /**PATH /Users/salmanmalik/Downloads/Azlan/Laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>