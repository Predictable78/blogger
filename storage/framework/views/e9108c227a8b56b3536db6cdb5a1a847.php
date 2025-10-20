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
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Posts')); ?>

            </h2>
            <a
                href="<?php echo e(route('posts.create')); ?>"
                class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700"
            >
                New Post
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <?php if(session('status')): ?>
                <div class="bg-green-100 border border-green-200 text-green-800 px-4 py-3 rounded">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article class="bg-white shadow-sm rounded-lg p-6 space-y-3">
                    <header>
                        <h3 class="text-xl font-semibold text-gray-900">
                            <a href="<?php echo e(route('posts.show', $post)); ?>" class="hover:underline">
                                <?php echo e($post->title); ?>

                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">
                            By <?php echo e($post->user->name); ?> &middot; <?php echo e($post->created_at->diffForHumans()); ?>

                        </p>
                    </header>

                    <p class="text-gray-700 whitespace-pre-line">
                        <?php echo e(\Illuminate\Support\Str::limit($post->body, 220)); ?>

                    </p>

                    <?php if($post->user_id === auth()->id()): ?>
                        <footer class="flex gap-3">
                            <a href="<?php echo e(route('posts.edit', $post)); ?>" class="text-blue-600 hover:underline text-sm">
                                Edit
                            </a>
                            <form method="POST" action="<?php echo e(route('posts.destroy', $post)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button
                                    type="submit"
                                    class="text-red-600 hover:underline text-sm"
                                    onclick="return confirm('Delete this post?')"
                                >
                                    Delete
                                </button>
                            </form>
                        </footer>
                    <?php endif; ?>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-gray-600">No posts yet. Create one to get started!</p>
            <?php endif; ?>

            <?php echo e($posts->links()); ?>

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
<?php /**PATH /Users/salmanmalik/Downloads/Azlan/Laravel/resources/views/posts/index.blade.php ENDPATH**/ ?>