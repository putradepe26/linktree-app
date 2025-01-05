<!DOCTYPE html>
<html>
<head>
    <title>Links</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
</head>
<body>
    <div class="container">
        <h1>Links</h1>
        <a href="<?php echo e(route('links.create')); ?>" class="btn btn-primary">Add Link</a>
        <ul id="sortable" class="list-group mt-3">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item" data-id="<?php echo e($link->id); ?>">
                    <?php echo e($link->title); ?> (<?php echo e($link->url); ?>)
                    <a href="<?php echo e(route('links.edit', $link->id)); ?>" class="btn btn-sm btn-warning float-right">Edit</a>
                    <form action="<?php echo e(route('links.destroy', $link->id)); ?>" method="POST" class="float-right mr-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $('#sortable').sortable({
                update: function(event, ui) {
                    let order = $(this).sortable('toArray', { attribute: 'data-id' });
                    $.post('<?php echo e(route('links.reorder')); ?>', { order: order, _token: '<?php echo e(csrf_token()); ?>' });
                }
            });
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\linktree-app\resources\views/index.blade.php ENDPATH**/ ?>