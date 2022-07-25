<?php $__env->startSection('title','view Blogs'); ?>

<?php $__env->startSection('mainBody'); ?>
        <!-- Blog items -->
        <div class="container">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>
            <div class="row m-auto justify-content-center">
                <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-2">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo e(asset('assets/images/news reading.jpg')); ?>"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($blog->title); ?></h5>
                                <p class="card-text"><?php echo e($blog->description); ?></p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahmad-Blog\resources\views/welcome.blade.php ENDPATH**/ ?>