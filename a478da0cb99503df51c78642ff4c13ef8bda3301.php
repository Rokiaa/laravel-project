
<?php $__env->startSection('content'); ?>
<ul>
<li>ID=<?php echo e($post->id); ?></li>
<li>Title=<?php echo e($post->title); ?></li>
<li>Body=<?php echo e($post->body); ?></li>
</ul>
<a href="<?php echo e(route('posts.index')); ?>">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\summertrain\resources\views/posts/show.blade.php ENDPATH**/ ?>