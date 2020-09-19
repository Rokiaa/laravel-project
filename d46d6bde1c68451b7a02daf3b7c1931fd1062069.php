
<?php $__env->startSection('content'); ?>
<center><a class="btn btn-success ml-5" href="<?php echo e(route('posts.create')); ?>" id="createNewItem"> New</a></center>
<table border=2 align="center">
<thead>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Body</th>
<th scope="col">User Id</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
<th scope="col">Show</th>
</thead>
<tbody>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<th scope="row"><?php echo e($post->id); ?></th>
<td><?php echo e($post->title); ?></td>
<td><?php echo e($post->body); ?></td>
<td><?php echo e($post->user_id); ?></td>
<td><a href="<?php echo e(route('posts.edit',$post->id)); ?>">Edit </a></td>
<td>
<?php echo Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete']); ?>

<button type="submit" class="btn btn-primary">Delete</button> 
<?php echo Form::close(); ?></td>
<td><a href="<?php echo e(route('posts.show',$post->id)); ?>">Show </a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\summertrain\resources\views/posts/list.blade.php ENDPATH**/ ?>