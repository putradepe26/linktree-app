
<body> 
    <div class="container"> 
    <div class="d-flex justify-content-center">
        <img class="rounded-full object-contain items-center" src="images/image.png">
    </div>
    <p class="text-lg-center">Davi Pramana Putra</p>
    <p class="text-md-center">Junior IT Developer</p>
    <div class="row">
        <div class="col text-center">
            <a href="<?php echo e(route('links.index')); ?>" class="btn btn-primary mb-2 ">Linktree Bio</a>
        </div>
    </div>
        <ul class="list-group"> <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li class="list-group-item"> 
            <a href="<?php echo e($link->url); ?>" target="_blank" class="d-flex justify-content-center"><?php echo e($link->title); ?></a> 
            </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </ul> 
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
</body> 
</html>
<?php echo $__env->make('layers.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\linktree-app\resources\views/links/preview.blade.php ENDPATH**/ ?>