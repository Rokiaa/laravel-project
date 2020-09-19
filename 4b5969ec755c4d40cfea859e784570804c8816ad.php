
<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route'=>['posts.update',$post->id],'method'=>'put']); ?>

<div class="form-group">
<label for="title">Title</label>
<?php echo Form::text('title',$post->title,['placeholder'=>'Title..']); ?>

<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="from-group">
<lavel for="body">Body</label>
<?php echo Form::text('body',$post->body,['placeholder'=>'Body...']); ?>

<?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\summertrain\resources\views/posts/edit.blade.php ENDPATH**/ ?>