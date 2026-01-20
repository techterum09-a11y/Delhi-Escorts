

<?php $__env->startSection('content'); ?>

<!-- ================= HERO VIDEO ================= -->
<div id="video-wrapper" style="position:relative; width:100%; overflow:hidden;">
    <video autoplay muted loop playsinline
           style="width:100%; height:auto; max-height:100vh; object-fit:cover; display:block;">
        <source src="https://fitgirl08.com/website-images/fitgirl-video2.mp4" type="video/mp4">
    </video>

    <!-- Optional overlay for darkening the video -->

    <!-- Hero content
    <div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
                color:#fff; text-align:center; width:90%; z-index:10;">
        <h1 style="font-size:2.5rem; font-weight:800; margin-bottom:15px;">Welcome to Escorts</h1>
        <p style="font-size:1.2rem; margin-bottom:25px;">Professional Companionship Services</p>
        <a href="<?php echo e(route('services')); ?>" class="btn btn-primary btn-lg">Explore Services</a>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-light btn-lg ms-2">Contact Us</a>
    </div> -->
</div>

<!-- ================= HERO CONTENT ================= -->
<!-- <div style="position:relative; z-index:10; display:flex; align-items:center; justify-content:center; height:100vh; text-align:center; color:#fff; padding:0 15px;">
    <div>
        <h1 style="font-size:3rem; font-weight:800; margin-bottom:15px;">Welcome to Escorts</h1>
        <p style="font-size:1.2rem; margin-bottom:25px;">Professional Companionship Services</p>
        <a href="<?php echo e(route('services')); ?>" class="btn btn-primary btn-lg">Explore Services</a>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-light btn-lg ms-2">Contact Us</a>
    </div>
</div> -->

<div id="profiles" style="position:relative; z-index:1;">
    <?php echo $__env->make('partials.profile-section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\escorts\resources\views/home.blade.php ENDPATH**/ ?>