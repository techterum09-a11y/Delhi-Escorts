

<?php $__env->startSection('title', 'Gallery - ' . config('app.name')); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Gallery</div>
            <div class="card-body">
                <h2>Our Gallery</h2>
                
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div style="background-color: #e9ecef; height: 250px; display: flex; align-items: center; justify-content: center;">
                                <p class="text-muted">Image 1</p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Gallery Item 1</h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div style="background-color: #e9ecef; height: 250px; display: flex; align-items: center; justify-content: center;">
                                <p class="text-muted">Image 2</p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Gallery Item 2</h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div style="background-color: #e9ecef; height: 250px; display: flex; align-items: center; justify-content: center;">
                                <p class="text-muted">Image 3</p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Gallery Item 3</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\escorts\resources\views/gallery.blade.php ENDPATH**/ ?>