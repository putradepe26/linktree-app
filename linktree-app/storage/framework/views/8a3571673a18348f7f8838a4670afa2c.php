
<body>
    <div class="container">
        <h1 align="center">Tempat Link URL</h1>
        <a href="<?php echo e(route('links.create')); ?>" class="btn btn-primary">Membuat Link</a>
        <a href="<?php echo e(route('links.preview')); ?>" class="btn btn-primary right">Preview Link</a>
        <ul id="sortable" class="list-group mt-3">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item" data-id="<?php echo e($link->id); ?>">
                    <?php echo e($link->title); ?> (<?php echo e($link->url); ?>)
                    <a href="<?php echo e(route('links.edit', $link->id)); ?>" class="btn btn-sm btn-secondary float-right">Edit</a>
                    <!--<a href="<?php echo e(route('links.preview', $link->id)); ?>" class="btn btn-sm btn-info float-right ml-3">Preview</a>-->
                    <form action="<?php echo e(route('links.destroy', $link->id)); ?>" method="POST" class="float-right mr-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <!--<button type="submit" class="btn btn-sm btn-danger">Hapus</button>-->
                        <button class="btn btn-sm btn-danger" type="submit" >Hapus</button>
                    </form>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
       
</body>
</html>

<?php echo $__env->make('layers.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layers.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\linktree-app\resources\views/links/index.blade.php ENDPATH**/ ?>