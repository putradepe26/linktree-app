<!DOCTYPE html>
<html>
<head>
    <title>Membuat Link</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Add Link</h1>
        <form action="<?php echo e(route('links.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="url" class="form-control" id="url" name="url" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Link</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\linktree-app\resources\views/links/create.blade.php ENDPATH**/ ?>