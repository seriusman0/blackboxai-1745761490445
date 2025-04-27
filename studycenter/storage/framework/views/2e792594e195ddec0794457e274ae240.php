<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
<?php echo $__env->make('partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.payment-proof-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php
        use App\Http\Controllers\BlogController;
        $blogs = app(BlogController::class)->index()->getData()['blogs'] ?? collect();
    ?>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="pt-3 pb-2 mb-3 border-bottom text-center">
        <h3 class="fw-bold">Komunitas Belajar dan Rumah Kedua Remaja</h3>
        <h4 class="fw-bold">Sehat, Positif dan Berprestasi</h4>
    <?php echo $__env->make('partials.blog-section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="pt-3 pb-2 mb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
          <h3 class="fw-bold">Komunitas Belajar dan Rumah Kedua Remaja</h3>
          <h4 class="fw-bold">Sehat, Positif dan Berprestasi</h4>
        </div>
        <div>
          <?php if(auth()->guard()->check()): ?>
            <form method="POST" action="<?php echo e(route('logout')); ?>">
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
          <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-primary">Login</a>
          <?php endif; ?>
        </div>
      </div>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /project/sandbox/user-workspace/studycenter/resources/views/welcome.blade.php ENDPATH**/ ?>